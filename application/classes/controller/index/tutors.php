<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Tutors extends Controller_Index {

    public $template = 'index/index_view';

    public function action_index()
    {
        // добавляем стили
        $this->template->title = 'Преподаватели';
        $this->template->content = 'Контроллер TUTORS';

    }

}
