<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Tutor_Labs extends Controller_Index
{
	public $template = 'tutor/base';
	public function action_index()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		$pages                     = ORM::factory('lab')->find_all();
		$this->template->title     = 'Управление лабораторными';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/labs/list', array(
			'pages' => $pages
		));
	}
	public function action_edit()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array(
				'id',
				'title',
				'condition',
				'answer'
			));
			$page = ORM::factory('exercise', $data['id'])->set('title', $data['title'])->set('condition', $data['condition'])->set('answer', $data['answer'])->update();
			$this->request->redirect('tutor/labs/');
		}
		$id                        = $this->request->param('id');
		$labs                      = ORM::factory('lab', $id);
		$course                    = ORM::factory('course')->find_all();
		$this->template->title     = 'Редактирование курса';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/labs/edit', array(
			'labs' => $labs,
			'course' => $course
		));
	}
	public function action_delete()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		if (isset($_POST['submit'])) {
			$data    = Arr::extract($_POST, array(
				'id'
			));
			$lection = ORM::factory('lab', $data['id'])->delete();
			$this->request->redirect('tutor/labs/');
		}
		$id                        = $this->request->param('id');
		$this->template->title     = 'Удаление курса';
		$this->template->pageclass = 'fullwidth';
		$this->template->content   = View::factory('tutor/labs/delete', array(
			'id' => $id
		));
	}
	public function action_add()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		$id   = Auth::instance()->get_user()->id;
		$user = ORM::factory('user', $id);
		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array(
				'title',
				'condition',
				'id_author',
				'course_id',
				'answer'
			));
			$page = ORM::factory('lab')->values(array(
				'title' => $data['title'],
				'condition' => $data['condition'],
				'answer' => $data['answer'],
				'id_author' => $user->id,
				'course_id' => $data['course_id']
			))->create();
			if ($page) {
				$this->request->redirect('tutor/labs/');
			}
		}
		$labs                      = ORM::factory('lab')->find_all();
		$course                    = ORM::factory('course')->find_all();
		$this->template->title     = 'Добавление нового курса';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/labs/add', array(
			'course' => $course,
			'labs' => $labs
		));
	}
	public function action_view()
	{
		$this->template->title     = 'Содержимое лабораторной';
		$this->template->pageclass = 'rightsidebar';
		$lab_id                    = $this->request->param('id');
		$exercise                  = ORM::factory('exercise')->where('lab_id', '=', $lab_id)->find_all();
		$this->template->content   = View::factory('tutor/labs/view', array(
			'exercise' => $exercise,
			'lab_id' => $lab_id
		));
	}
}