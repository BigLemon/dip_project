<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Tests extends Controller_Index {

    public $template = 'index/base';

    public function action_index()
    {
        if (!Auth::instance()->logged_in()) {
            $this->request->redirect('auth/login');
        }
        
        $id = $this->request->param('id');
      
        $id_user = Auth::instance()->get_user();
        $user = ORM::factory('student', $id_user);
        $test = ORM::factory('test', $id);
       /* $query = DB::select('testresults.id_user', 'testresults.id_test','testresults.result', 'tests.type')
                ->from('testresults')
                ->join('tests')
                ->on('tests.id', '=', 'testresults.id_user') 
                ->where('id_user', '=', $id_user)
                ->and_where('id_test', '=', $id)
                ->execute();
        var_dump($query);*/
       
        $questions = ORM::factory('question')->where('id_test', '=', $id)->find_all();
      //  $qanswer = ORM::factory('qanswer')->where('question_id', '=', $id)->find_all();
        $this->template->title = 'Тесты';
        $this->template->pageclass = 'fullwidth';   
        $this->template->content = View::factory('index/tests/index', array(
            'id_test' => $id,
            'questions' => $questions,
            'test' =>$test,
          // 'qanswer'=>$qanswer,
            //'query' =>$query,
        ));
}

    public function action_go()
    {
        $id_user = Auth::instance()->get_user();
        //$user = ORM::factory('user',$id_user);
       
        if (isset($_POST['submit'])) {
            $points = 0;
            $ans = 0;
            //var_dump($_POST);
            foreach($_POST as $k => $v){
                if(($k == "id_test") OR ($k == "submit")) continue;
                $right_answer = ORM::factory('qanswer')->where('id','=', $v)->find();
                if($right_answer->right) $points++;
            }
        }
     
        $question = ORM::factory('question')->where('id_test', '=', $_POST['id_test'])->find_all();
        foreach ($question as $q) {
            $answers = $q->qanswer->find_all();
            if($answers['right']) $ans++;
            
        }
         
          $percent = (($points/$ans)*100);
        $res = ORM::factory('testresult') ->where('id_user', '=', $id_user)->and_where('id_test', '=', $_POST['id_test']);
        $countres = $res->count_all();
       // print_r($res);
        if ($countres == 0){    
        $result = ORM::factory('testresult')->values(array(
            'id_user' => Auth::instance()->get_user(),
            'id_test' => $_POST['id_test'],
            'dt' => date('Y-m-d') ,
            'result' => $percent,
        ))->create();
                             }
        else {
            $query = DB::update('testresults')
                    ->set(array('result' => $percent))
                    ->where('id_user', '=', $id_user)->and_where('id_test', '=', $_POST['id_test']);   
            $query->execute();
             } 
        
        
        $this->template->title = 'Результат тестирования';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('index/tests/result', array(
            'points' => $points,
            'percent' => $percent,
            'countres' => $countres,
        )); 

    }
     public function action_done()
    {
        if (!Auth::instance()->logged_in()) {
            $this->request->redirect('auth/login');
        }
                
        $this->template->title = 'Тесты';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('index/tests/done');
    }

}
