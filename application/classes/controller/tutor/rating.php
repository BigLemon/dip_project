 <?php
defined('SYSPATH') or die('No direct script access.');
class Controller_Tutor_Rating extends Controller_Index
{
	public $template = 'tutor/base';
	public function action_index()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		$id                        = Auth::instance()->get_user()->id;
		$user                      = ORM::factory('user', $id);
		$course                    = ORM::factory('course')->where('id_author', '=', $id)->find_all();
		$this->template->title     = 'Успеваемость студентов';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/rating/rating', array(
			'course' => $course
		));
	}
	public function action_view()
	{
		$this->template->title     = 'Успеваемость по курсу';
		$this->template->pageclass = 'rightsidebar';
		$course_id                 = $this->request->param('id');
		$tests                     = ORM::factory('test')->where('course_id', '=', $course_id)->find_all();
		$lab                       = ORM::factory('lab')->where('course_id', '=', $course_id)->find_all();
		$user_course               = ORM::factory('user')->join('usercourses', 'INNER')->on('usercourses.student_id', '=', 'user.id')->where('usercourses.course_id', '=', DB::expr($course_id))->find_all();
		$users                     = DB::select('id', 'lastname', 'firstname')->from('users')->join('usercourses', 'inner')->on('users.id', '=', 'usercourses.student_id')->where('usercourses.course_id', '=', DB::expr($course_id))->execute();
		foreach ($users as $user) {
			print_r($user['id']) . '</br>';
			$courses = DB::select('result')->from('testresults')->join('tests', 'inner')->on('tests.course_id', '=', DB::expr($course_id))->where('testresults.id_user', '=', DB::expr($user['id']))->and_where('testresults.id_test', '=', 'tests.id')->execute()->as_array();
		}
		$this->template->content = View::factory('tutor/rating/view', array(
			'user' => $users,
			'courses' => $courses,
			'tests' => $tests,
			'lab' => $lab
		));
	}
	public function action_test()
	{
		$this->template->title     = 'Успеваемость по курсу';
		$this->template->pageclass = 'rightsidebar';
		$id                        = $this->request->param('id');
		$users                     = ORM::factory('user')->find_all();
		$tests                     = DB::select('id', 'type')->from('tests')->where('tests.id', '=', DB::expr($id))->execute();
		foreach ($tests as $k => $v) {
			print_r($k);
			print_r($v);
		}
		$query                   = DB::select()->from('users')->join('testresults')->on('testresults.id_user', '=', 'users.id')->where('testresults.id_test', '=', $id)->execute();
		$this->template->content = View::factory('tutor/rating/test', array(
			'users' => $users,
			'tests' => $tests,
			'query' => $query
		));
	}
	public function action_repeat()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		if (isset($_POST['submit'])) {
			print_r($_POST);
		}
		$id                        = Auth::instance()->get_user()->id;
		$user                      = ORM::factory('user', $id);
		$course                    = ORM::factory('course')->where('id_author', '=', $id)->find_all();
		$this->template->title     = 'Успеваемость студентов';
		$this->template->pageclass = 'rightsidebar';
		$this->template->content   = View::factory('tutor/rating/rating', array(
			'course' => $course
		));
	}
	public function action_lab()
	{
		if (!Auth::instance()->logged_in('tutor')) {
			$this->request->redirect('auth/login');
		}
		$this->template->title     = 'Успеваемость по лабораторным';
		$this->template->pageclass = 'fullwidth';
		$id                        = $this->request->param('id');
		$users                     = ORM::factory('user')->find_all();
		$query                     = DB::select()->from('labresults', 'users')->where('labresults.id_lab', '=', DB::expr($id))->and_where('labresults.id_user', '=', $users['id'])->execute();
		$this->template->content   = View::factory('tutor/rating/lab_view', array(
			'query' => $query
		));
	}
}