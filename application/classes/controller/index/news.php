<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Новости
 */
class Controller_Index_News extends Controller_Index {

    public $template = 'index/base';
    
    public function action_index() {

        $this->template->title = 'Новости';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = '<h2>Новости</h2><br>';

        $news = ORM::factory('new')->order_by('dt', 'DESC')->find_all();
        $this->template->content = View::factory('index/news/allnews', array(
            'news' => $news
        ));
    }
    
    public function action_view() {
        $this->template->title = 'Новости';
        $this->template->pageclass = 'rightsidebar';
        $id = $this->request->param('id');
        $entry = ORM::factory('new')->where('id', '=', $id)->find();
        if($entry->loaded())
            $this->template->content =  View::factory('index/news/fullnews', array(
                'news' => $entry
            ));
        else 
            $this->template->content =  View::factory('index/news/fullnews', array(
                'news' => $entry,
                'error' => "Такой новости не существует"
            ));
    }
}