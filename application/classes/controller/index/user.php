<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Index_User extends Controller_Index
{
	
	public $template = 'index/base';
	
	public function action_index()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		$this->template->title     = 'Мой профиль';
		$this->template->pageclass = 'rightsidebar';
		$id                        = Auth::instance()->get_user();
		$user                      = ORM::factory('student', $id);
		$usercourses               = $user->courses->find_all();
		$files                     = array();
		$errors                    = array();
		
		if (!file_exists("user_{$id}")) {
			$errors = array(
				Kohana::message('auth/lab', 'no_lab')
			);
		}
		if ($handle = opendir("user_{$id}")) {
			while (false !== ($file = readdir($handle))) {
				$files[] = $file;
			}
			closedir($handle);
		}
		var_dump($files);
		foreach (glob("user_{$id}/*.*") as $filename) {
			$files[] = $filename;
		}
		
		$this->template->content = View::factory('index/user/profile', array(
			'user' => $user,
			'courses' => $usercourses,
			'files' => $files,
			'errors' => $errors
		));
		
	}
	
	/*
	 * Просмотр профиля другого пользователя
	 */
	public function action_view()
	{
		$this->template->title     = 'Профиль';
		$this->template->pageclass = 'rightsidebar';
		$id                        = $this->request->param('id');
		$user                      = ORM::factory('student', $id);
		if ($user->loaded()) {
			$usercourses = $user->courses->find_all();
			
			$this->template->content = View::factory('index/user/viewuser', array(
				'user' => $user,
				'courses' => $usercourses
			));
		} else {
			$this->template->content = View::factory('index/user/viewuser', array(
				'error' => "Нет такого пользователя"
			));
		}
		
	}
	
	/*
	 * Настройки пользователя
	 * TODO: сообщения об успехе или неудачи сохранения
	 */
	public function action_settings()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		
		if (isset($_POST['submit'])) {
			$data     = Arr::extract($_POST, array(
				'id',
				'firstname',
				'lastname',
				'otch',
				'icq',
				'skype'
			));
			$settings = ORM::factory('user', $data['id'])->set('firstname', $data['firstname'])->set('lastname', $data['lastname'])->set('otch', $data['otch'])->set('icq', $data['icq'])->set('skype', $data['skype'])->update();
		}
		$this->template->title     = 'Мои настройки';
		$this->template->pageclass = 'rightsidebar';
		$id                        = Auth::instance()->get_user();
		$user                      = ORM::factory('student', $id);
		
		$this->template->content = View::factory('index/user/settings', array(
			'user' => $user
		));
	}
	
	/*
	 * Сообщения
	 */
	public function action_message()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		$this->template->title     = 'Сообщения';
		$this->template->pageclass = 'fullwidth';
		$id                        = Auth::instance()->get_user()->id;
		
		$user = ORM::factory('user', $id);
		
		$inmessages = ORM::factory('message')->where('to_id', '=', $id)->find_all();
		$outmessage = ORM::factory('message')->where('from_id', '=', $id)->find_all();
		
		$this->template->content = View::factory('index/user/message', array(
			'inmessage' => $inmessages,
			'outmessage' => $outmessage,
			'user' => $user
			
		));
		
	}
	/*
	 * Ф-я отправки сообщения
	 * TODO: проверки на ошибки
	 */
	public function action_sendpm()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		$this->template->title     = 'Сообщения';
		$this->template->pageclass = 'fullwidth';
		$id                        = Auth::instance()->get_user()->id;
		
		$user    = ORM::factory('user', $id);
		$to_user = ORM::factory('user')->find_all();
		
		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array(
				'from_id',
				'to_id',
				'topic',
				'txt'
			));
			$dt   = date("Y-m-d G:i:s");
			$msg  = ORM::factory('message')->values(array(
				'to_id' => $data['to_id'],
				'from_id' => $user->id,
				'topic' => $data['topic'],
				'txt' => $data['txt'],
				'dt' => $dt
			))->create();
			if ($msg) {
				$this->request->redirect('user/message/');
			} else {
				$errors = array(
					Kohana::message('auth/user', 'no_user')
				);
			}
		}
		$this->template->content = View::factory('index/user/sendpm', array(
			'user' => $user,
			'to_user' => $to_user
		));
	}
	
	/*
	 * Загрузка аватара
	 * TODO: проверки на ошибки
	 */
	public function action_updateavatar()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		// Создание объекта валидации
		$validate = Validation::factory($_FILES);
		// Добавление правил валидации значения 'picture'
		$validate->rule('picture', array(
			'Upload',
			'not_empty'
		))->rule('picture', 'Upload::type', array(
			':value',
			array(
				'jpg',
				'png',
				'gif'
			)
		));
		
		if ($validate->check()) {
			// Успешная валидация
			$newfile  = Auth::instance()->get_user() . '_' . time();
			$filename = Upload::save($_FILES['picture'], $newfile . '_temp.jpg', './images/avatars/', 0777);
			
			// Ресайз изображения
			if (Image::factory($filename)->height > 250) {
				Image::factory($filename)->resize(250, 250, Image::WIDTH)->save('./images/avatars/' . $newfile . '.jpg');
				
				ORM::factory('user', Auth::instance()->get_user())->set('avatar', $newfile)->save();
			} elseif (Image::factory($filename)->width > 250) {
				Image::factory($filename)->resize(250, 250, Image::WIDTH)->save('./images/avatars/' . $newfile . '.jpg');
				
				ORM::factory('user', Auth::instance()->get_user())->set('avatar', $newfile)->save();
			} else {
				Image::factory($filename)->save('./images/avatars/' . $newfile . '.jpg');
				
				ORM::factory('user', Auth::instance()->get_user())->set('avatar', $newfile)->save();
			}
			
			unlink($filename);
			
			$this->request->redirect('user/settings');
		} else {
			// Вывод ошибки
			$this->errors = $validate->errors('upload');
			print_r($this->errors);
		}
	}
	
	/*
	 * Запись на курсы
	 * TODO: проверки на ошибки
	 */
	public function action_addcourse()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		
		$id   = Auth::instance()->get_user();
		$user = ORM::factory('student', $id);
		
		$course_id = $this->request->param('id');
		
		$add = ORM::factory('usercourse')->values(array(
			'student_id' => $id,
			'course_id' => $course_id,
			'status' => "1"
		))->create();
		
		if ($add) {
			$this->request->redirect('courses/');
		} else {
			$this->request->redirect('courses/');
		}
		
	}
	
	/*
	 * Удалить записанные курсы
	 * TODO: проверки на ошибки
	 */
	public function action_delcourse()
	{
		if (!Auth::instance()->logged_in()) {
			$this->request->redirect('auth/login');
		}
		
		$id   = Auth::instance()->get_user();
		$user = ORM::factory('student', $id);
		
		$course_id = $this->request->param('id');
		
		$del = ORM::factory('usercourse')->where('student_id', '=', $id)->where('course_id', '=', $course_id)->find()->delete();
		
		if ($del) {
			$this->request->redirect('courses/');
		} else {
			$this->request->redirect('courses/');
		}
		
	}
	
}
