<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Template {

    public $template = 'index/base';
    protected $user;
    protected $auth;
    
    public function before()
    {
        parent::before();
        Cookie::$salt = 'eos';
        $this->auth = Auth::instance();
        $this->user = $this->auth->get_user();
            
    }


}
