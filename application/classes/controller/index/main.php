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
   
       /* $this->template->content = View::factory('index/index')
            ->bind('errors', $errors);*/

        /*
        $news = ORM::factory('new')->limit(3)->find_all();
        
        foreach ($news as $entry)
        {
            $this->template->content .= '<h3>'. $entry->title .'</h3>'. $entry->short .'<br>';
            $this->template->content .= '<p><a class="btn" href="/news/view/'. $entry->id .'">Подробнее</a></p><br/>';
        }
        */
    }
    
}