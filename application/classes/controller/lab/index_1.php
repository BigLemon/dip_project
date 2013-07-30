<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Lab_Index extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
  if (file_exists('example.txt')) 
             {
            $xml = fopen('example.txt','r');
             echo "OK";
             } 
             else 
               {
             exit('Временные неполадки. Сообщите админу.');
               }      
//$test = htmlspecialchars(highlight_file('example.txt'));
      $test = file("example.txt");
        $this->template->content = View::factory('lab/index',array(
            'test' => $test,
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