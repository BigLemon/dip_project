<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Admin_Index extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'rightsidebar';
        

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }
        
        $id = Auth::instance()->get_user();
        $user = ORM::factory('student',$id);
 
        $usercourses = $user->courses->find_all();

        $this->template->content = View::factory('admin/index', array(
            'user' => $user,
            'courses' => $usercourses
            ));
    }

}