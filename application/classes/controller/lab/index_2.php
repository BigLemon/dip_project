<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Lab_Index extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
 
        $xml = simplexml_load_file('example.xml');
         
        $this->template->content = View::factory('lab/index',array(
            'xml' => $xml,
        ));
    }
     public function action_outresult() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
      if (isset($_POST['submit']))
     {    
            if (file_exists('example.txt')) 
             {
            $xml = fopen('example.txt','r');
             echo "OK";
             } 
             else 
               {
             exit('Временные неполадки. Сообщите админу.');
               }
      }
        $this->template->content = View::factory('lab/result');
    }

}