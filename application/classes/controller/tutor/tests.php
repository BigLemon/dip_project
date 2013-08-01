<?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Tutor_Tests extends Controller_Index
{
	public $template = 'tutor/base';
	public function action_index()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		$tests                     = ORM::factory('test')->find_all();
		$this->template->title     = 'Тесты';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/tests/list', array(
			'tests' => $tests
		));
	}
	public function action_add()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		$course = ORM::factory('course')->find_all();
		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array(
				'course_id',
				'name',
				'time',
				'type'
			));
			$page = ORM::factory('test')->values(array(
				'course_id' => $data['course_id'],
				'name' => $data['name'],
				'time' => (int) $data['time'],
				'type' => $data['type']
			))->create();
			if ($page) {
				$this->request->redirect('tutor/tests/');
			}
		}
		$this->template->title     = 'Новый тест';
		$this->template->pageclass = 'rightsidebar';
		$course_id                 = $this->request->param('id');
		$this->template->content   = View::factory('tutor/tests/add', array(
			'course_id' => $course_id,
			'course' => $course
		));
	}
	public function action_view()
	{
		$id                        = $this->request->param('id');
		$questions                 = ORM::factory('question')->where('id_test', '=', $id)->find_all();
		$this->template->title     = 'Тесты';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/tests/view', array(
			'questions' => $questions,
			'id_test' => $id
		));
	}
	public function action_delete()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		if (isset($_POST['submit'])) {
			$data = Arr::extract($_POST, array(
				'id'
			));
			$test = ORM::factory('test', $data['id'])->delete();
			$this->request->redirect('tutor/tests');
		}
		$id                        = $this->request->param('id');
		$this->template->title     = 'Удаление теста';
		$this->template->pageclass = 'fullwidth';
		$this->template->content   = View::factory('tutor/tests/delete', array(
			'id' => $id
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
				'course_id',
				'name',
				'time',
				'type'
			));
			$page = ORM::factory('test', $data['id'])->set('name', $data['name'])->set('time', $data['time'])->set('type', $data['type'])->update();
			if ($page) {
				$this->request->redirect('tutor/tests');
			}
		}
		$id                        = $this->request->param('id');
		$test                      = ORM::factory('test', $id);
		$this->template->title     = 'Редактирование теста';
		$this->template->pageclass = 'fullwidth';
		$this->template->content   = View::factory('tutor/tests/edit', array(
			'test' => $test
		));
	}
}