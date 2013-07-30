<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Tutor extends Controller_Index {

    public $template = 'index/base';

    public function action_index()
    {
        if (Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('tutor/index');
        }
        else
            $this->request->redirect('auth/login');

    }


}
