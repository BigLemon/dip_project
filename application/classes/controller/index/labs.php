<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Labs extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {
         if (!Auth::instance()->logged_in()) {
            $this->request->redirect('auth/login');
        }

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
          
         $id = $this->request->param('id');
         
       $file  = $id.".xml";
       var_dump($file);
         $xml = simplexml_load_file($file);
          
         
        $this->template->content = View::factory('lab/index',array(
            'xml' => $xml,
        ));
      
    }
     public function action_outresult() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
      if (isset($_POST['submit']))
     {    // var_dump($_POST);
          $data = Arr::extract($_POST, array('stud_code','id'));
          
          
          $file = $data['id'].".xml";
          $xml = simplexml_load_file($file);
          
    $xml->stud = $data['stud_code'];
    var_dump($xml);
   
    $xml->asXML($file);
      }
      
      
        $this->template->content = View::factory('lab/outresult',array(
            'xml' => $xml,
        ));
        
    
    }

}