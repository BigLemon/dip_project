<?php
defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Tutor_Courses extends Controller_Index
{
	
	public $template = 'tutor/base';
	
	public function action_index()
	{
		
		if (!Auth::instance()->logged_in('tutor')) { //есть ли активные сессии преподавателя
			$this->request->redirect('auth/login'); //перенаправление на страницу авторизации
		}
		/*запрос на выбор все записей к модели courses*/
		$pages = ORM::factory('course')->find_all();
		
		$this->template->title     = 'Управление страницами'; //вывод в шаблон переменную title
		$this->template->pageclass = 'rightsidebar'; //вывод в шаблон переменную pageclass
		$this->template->content   = View::factory('tutor/courses/list', array(
			'pages' => $pages //вывод в шаблон переменной $pages 
		));
	}
	
	public function action_edit()
	{
		
		if (!Auth::instance()->logged_in('tutor')) { //есть ли активные сессии преподавателя
			$this->request->redirect('auth/login'); //перенаправление на страницу авторизации
		}
		
		if (isset($_POST['submit'])) { //преподавателя нажал на кнопку
			$data = Arr::extract($_POST, array //получить значения из глобального массива 
					(
				'id',
				'name',
				'desc',
				'id_category',
				'status'
			));
			$page = ORM::factory('course', $data['id']) //обновление записи в таблице
				->set('name', $data['name'])->set('desc', $data['desc'])->set('id_category', $data['id_category'])->set('status', $data['status'])->update();
			if ($page) {
				$this->request->redirect('tutor/courses/'); //перенаправление на список курсов
			}
		}
		
		$id     = $this->request->param('id'); //текущее id
		$course = ORM::factory('course', $id);
		$cat    = ORM::factory('coursescategor')->find_all(); //выбрать категории
		
		$this->template->title     = 'Редактирование курса';
		$this->template->pageclass = 'rightsidebar';
		/*внутрь базового шаблона подкладываем еще одно представление*/
		$this->template->content   = View::factory('tutor/courses/edit', array(
			'course' => $course, //выбранный курс
			'category' => $cat //категории курсов
		));
	}
	
	/*
	 * Удаление курса
	 * TODO: удаление лекций, лаб и тестов
	 */
	public function action_delete()
	{
		
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		
		if (isset($_POST['submit'])) {
			$data    = Arr::extract($_POST, array(
				'id'
			)); //получить значения из глобального массива 
			$lection = ORM::factory('course', $data['id'])->delete(); //запрос удаления
			$this->request->redirect('tutor/courses/'); //перенаправление на страницу курсов
		}
		
		$id                        = $this->request->param('id'); //текущее id 
		$this->template->title     = 'Удаление курса'; //вывод в шаблон 
		$this->template->pageclass = 'fullwidth';
		$this->template->content   = View::factory('tutor/courses/delete', array(
			'id' => $id
		));
		
	}
	
	public function action_add()
	{
		
		if (!Auth::instance()->logged_in('tutor')) { //есть ли активные сессии преподавателя
			$this->request->redirect('auth/login'); //перенаправление на страницу авторизации
		}
		//получение id пользователя
		$id   = Auth::instance()->get_user()->id;
		// выбрать записи из таблицы по id
		$user = ORM::factory('user', $id);
		
		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, //получить значения из глобального массива 
				array(
				'name',
				'desc',
				'id_author',
				'id_category',
				'status'
			));
			//создание новой записи в таблице
			$page = ORM::factory('course')->values(array(
				'name' => $data['name'],
				'desc' => $data['desc'],
				'id_author' => $user->id,
				'id_category' => $data['id_category'],
				'status' => $data['status']
			))->create();
			if ($page) {
				//перенаправление на список курсов
				$this->request->redirect('tutor/courses/');
			}
		}
		
		$cat = ORM::factory('coursescategor')->find_all(); //выбрать записи с таблицы coursescategor
		
		$this->template->title     = 'Добавление нового курса'; //вывод в шаблон переменную title
		$this->template->pageclass = 'rightsidebar'; //вывод в шаблон переменную pageclass
		$this->template->content   = View::factory('tutor/courses/add', array( //вывод в шаблон форму добавления
			'category' => $cat
		));
		
	}
	
	/*
	 * Просмотр содержимого курса
	 */
	public function action_view()
	{
		$this->template->title     = 'Содержимое курса'; //вывод в шаблон переменную title
		$this->template->pageclass = 'rightsidebar'; //вывод в шаблон переменную pageclass
		$course_id                 = $this->request->param('id'); //получение id курса
		$lections                  = ORM::factory('lection') //выбор лекий курса
			->where('course_id', '=', $course_id)->find_all();
		
		$this->template->content = View::factory('tutor/courses/view', array(
			'lections' => $lections,
			'course_id' => $course_id
		));
	}
	
	/*
	 * Форма добавления лекции
	 */
	public function action_lectionadd()
	{
		$this->template->title     = 'Добавление лекции курса';
		$this->template->pageclass = 'rightsidebar';
		$course_id                 = $this->request->param('id');
		$this->template->content   = View::factory('tutor/lections/add', array(
			'course_id' => $course_id
		));
	}
	public function action_testadd()
	{
		$this->template->title     = 'Добавление теста курса';
		$this->template->pageclass = 'rightsidebar';
		$course_id                 = $this->request->param('id');
		$this->template->content   = View::factory('tutor/test/add', array(
			'course_id' => $course_id
		));
	}
	
	
}