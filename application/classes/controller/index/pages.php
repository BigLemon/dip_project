<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Pages extends Controller_Index {

    public $template = 'index/base';

    public function action_index()
    {
        // добавляем стили
        $this->template->title = 'Страницы';
        $this->template->pageclass = 'fullwidth';
        $url = $this->request->param('id');
        $info = ORM::factory('page')
            ->where('url', '=', $url)
            ->find();
        if($info->loaded()){
            $this->template->content = View::factory('index/pages/view', array(
                'info' => $info
            ));
        }
        else{
            $this->template->content = View::factory('index/pages/view', array(
                'error' => 'Такой страницы не существует'
            ));
        }

    }

}
