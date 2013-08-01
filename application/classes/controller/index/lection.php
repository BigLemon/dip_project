<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Lection extends Controller_Index
{
	
	public $template = 'index/base';
	
	public function action_index()
	{
		$this->template->title     = 'Лекция';
		$this->template->pageclass = 'rightsidebar';
		$lection_id                = $this->request->param('id');
		$id                        = Auth::instance()->get_user();
		$user                      = ORM::factory('student', $id);
		
		$usercourses = $user->courses->find_all(); // курсы пользователя
		
		$usercourses_array = array(); // курсы пользователя как массив
		foreach ($usercourses as $c) {
			array_push($usercourses_array, $c->id);
		}
		
		$lection = ORM::factory('lection')->where('id', '=', $lection_id)->find(); // текущая лекция
		if (in_array($lection->course_id, $usercourses_array)) {
			
			$lections_list           = ORM::factory('lection')->where('course_id', '=', $lection->course_id)->find_all();
			$this->template->content = View::factory('index/lection/view', array(
				'lection' => $lection,
				'lections_list' => $lections_list
			));
		} else {
			$error                   = "Вы не записаны на данный курс.";
			$this->template->content = View::factory('index/lection/view', array(
				'error' => $error
			));
			
		}
		
	}
	
	public function action_view()
	{
		$this->template->title     = 'Лекция';
		$this->template->pageclass = 'rightsidebar';
		$lection_id                = $this->request->param('id');
		$id                        = Auth::instance()->get_user();
		$user                      = ORM::factory('student', $id);
		
		$usercourses = $user->courses->find_all(); // курсы пользователя
		
		$usercourses_array = array(); // курсы пользователя как массив
		foreach ($usercourses as $c) {
			array_push($usercourses_array, $c->id);
		}
		
		$lection = ORM::factory('lection')->where('id', '=', $lection_id)->find(); // текущая лекция
		if (in_array($lection->course_id, $usercourses_array)) {
			
			$lections_list           = ORM::factory('lection')->where('course_id', '=', $lection->course_id)->find_all();
			$this->template->content = View::factory('index/lection/view', array(
				'lection' => $lection,
				'lections_list' => $lections_list
			));
		} else {
			$error                   = "Вы не записаны на данный курс.";
			$this->template->content = View::factory('index/lection/view', array(
				'error' => $error
			));
			
		}
		
	}
	
}
