<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Main extends Controller_Index {

    public $template = 'index/base';
    
    public function action_index() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
        $courses = ORM::factory('course')->find_all();
    $this->template->content = View::factory('index/index', array(
            'courses' => $courses
            ));
   
    }
    
}