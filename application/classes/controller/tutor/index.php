<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Tutor_Index extends Controller_Index {

    public $template = 'tutor/base';

    public function action_index() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'rightsidebar';

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }
         $id = Auth::instance()->get_user();
        $user = ORM::factory('student',$id);
 
        $usercourses = $user->courses->find_all();

        $this->template->content = View::factory('tutor/index', array(
            'user' => $user,
            'courses' => $usercourses
            ));
    }

}