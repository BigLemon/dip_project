<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Admin extends Controller_Index {

    public $template = 'index/base';

    public function action_index()
    {
        if (Auth::instance()->logged_in('admin')) {
            $this->request->redirect('admin/index');
        }
        else
            $this->request->redirect('auth/login');

    }


}
