<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Tutor_Questions extends Controller_Index {

    public $template = 'tutor/base';

    public function action_index() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        $questions = ORM::factory('test')->find_all();//выбрать записи из таблицы test
        $this->template->title = 'Вопросы'; //передача в шаблон title
        $this->template->pageclass = 'rightsidebar';
        /*передача в шаблон представление с массивом данных*/
        $this->template->content = View::factory('tutor/questions/list', array(
            'questions' => $questions,
        ));
    }


    /*
     * Обработчик добавления лекции
     */
    public function action_add() {

        if (!Auth::instance()->logged_in('tutor')) {//есть ли активные сессии преподавателя
            $this->request->redirect('auth/login');//перенаправление на страницу авторизации
        }
        /*Добавление вопроса*/
       /* if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, 
                    array('id_test', 'title', 'type', 'values', 'right'));
            $page = ORM::factory('question')->values(array(
                'title' => $data['title'],
                'type' => $data['type'],
                'id_test' => $data['id_test']
            ))->create();
            if ($page) { 
                foreach($data['values'] as $k => $v){ 
                    //добавление вариантов ответа
                    if($data['type'] == "radio") {$data['right'] == $k;}
                    $answer = ORM::factory('qanswer')->values(array(
                        'value' => $v,
                        'right' => isset($data['right'][$k])? 1 : 0,
                        'question_id' => $page->id,

                    ))->create();
            
                   //добавление в связующую таблицу
                   /* $qans = ORM::factory('qanswer')->values(array(
                        'question_id' => $page->id,
                        'answer_id' => $answer->id,
                    ))->create();*/
              /*  }
                $this->request->redirect('tutor/tests/view/' . $data['id_test']);
            }
            
        }*/
              if (isset($_POST['submit'])) {
              print_r($_POST);
            echo "<br />";
            echo "<br />";

            echo "Текст вопроса: ".$_POST['question_text'];
            echo "<br />";

            switch($_POST['typetest']) {
                case "checkbox": {$idtype = 1; $type = "Многовариантный"; break;}
                case "radio": {$idtype = 2; $type = "Одновариантный"; break;}
                case "text": {$idtype = 3; $type = "Свободный ответ"; break;}
            }

            echo "Тип вопроса: ".$type;
            echo "<br />";
            
            if($idtype == 1)
            {
                 if (isset($_POST['submit'])) {
                $page = ORM::factory('question')->values(array(
                'title' => $_POST['question_text'],
                'type' => $_POST['typetest'],
                'id_test' => $_POST['id_test']
            ))->create();
            if ($page) {
                for($i=1; $i <= $_POST['numanswers'];$i++)
                {
                    $answer = ORM::factory('qanswer')->values(array(
                        'value' => $_POST["chboxansinput$i"],
                        'right' => isset($_POST["correct_chbox$i"])? 1 : 0,
                        'question_id' => $page->id,

                    ))->create();
                    
                }
          
                $this->request->redirect('tutor/tests/view/' . $_POST['id_test']);
            }
            
        }
            }
            if($idtype == 2)
            {
                if (isset($_POST['submit'])) {
                $page = ORM::factory('question')->values(array(
                'title' => $_POST['question_text'],
                'type' => $_POST['typetest'],
                'id_test' => $_POST['id_test']
            ))->create();
            if ($page) {
                for($i=1; $i <= $_POST['numanswers'];$i++)
                {
                    $answer = ORM::factory('qanswer')->values(array(
                        'value' => $_POST["radioansinput$i"],
                        'right' => isset($_POST['correct_radio'])? 1 : 0,
                        'question_id' => $page->id,

                    ))->create();
                    
                }
          
                $this->request->redirect('tutor/tests/view/' . $_POST['id_test']);
            }
            
        }
    }
            if($idtype == 3)
            {
                if (isset($_POST['submit'])) {
           /* $data = Arr::extract($_POST, 
                    array('id_test', 'title', 'type', 'values', 'right'));*/
            $page = ORM::factory('question')->values(array(
                'title' => $_POST['question_text'],
                'type' => $_POST['typetest'],
                'id_test' => $_POST['id_test']
            ))->create();
            if ($page) { 
                    $answer = ORM::factory('qanswer')->values(array(
                        'value' => $_POST['text'],
                        'right' => $_POST['text'],
                        'question_id' => $page->id,

                    ))->create();
            
                        }
                $this->request->redirect('tutor/tests/view/' . $_POST['id_test']);
                  }
            
               }
            }
                          
        

        $id_test = $this->request->param('id');
        $this->template->title = 'Новый вопрос';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('tutor/questions/add', array(
            'id_test' => $id_test
        ));

    }

    public function action_view(){
        $id = $this->request->param('id');//текущее id
        $questions = ORM::factory('question')//выбор из таблицы question
            ->where('id_test', '=' , $id)
            ->find_all();
        $this->template->title = 'Тесты';//передача в шаблон title
        $this->template->pageclass = 'rightsidebar';
          /*передача в шаблон представление с массивом данных*/
        $this->template->content = View::factory('tutor/tests/view', array(
            'questions' => $questions,
        ));
    }

    public function action_delete() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));
            
           
            //удаление вариантов ответа
            $answers = ORM::factory('qanswer')->
                    where('question_id', '=', $data['id'])->find_all();
             foreach($answers as $a){
                $a->delete();
            }
            
            //удаление вопроса
            $question = ORM::factory('question' , $data['id'])->delete();
            
           //переправление на страницу тестов
            $this->request->redirect('tutor/tests/');
        }

        $id = $this->request->param('id');//текущее id
        $this->template->title = 'Удаление вопроса';
        $this->template->pageclass = 'fullwidth';
          /*передача в шаблон представление с массивом данных*/
        $this->template->content = View::factory('tutor/questions/delete', array(
            'id' => $id
        ));

    }

    public function action_edit() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, 
                    array('id', 'id_test', 'title', 'type', 'values', 'right'));
            //обновление вопроса
            $page = ORM::factory('question', $data['id'])
                ->set('title', $data['title'])
                ->set('type', $data['type'])
                ->set('id_test', $data['id_test'])
                ->update();
            //обновление ответов
            if ($page) {
                foreach($data['values'] as $k => $v){
                    $answer = ORM::factory('qanswer', $k )
                        ->set('value', $v)
                        ->set('right' , isset($data['right'][$k])? 1 : 0)
                        ->update();
                }
                $this->request->redirect('tutor/tests/view/' . $data['id_test']);
            }
        }

        $id = $this->request->param('id');//текущее id теста
        $question = ORM::factory('question' , $id);//выбор из таблицы по id 
        $answers = ORM::factory('qanswer')->where('question_id', '=', $id)->find_all();
        //$question->answers->find_all();
        var_dump($answers);
        
        
        $this->template->title = 'Редактирование теста';//передача в шаблон title
        $this->template->pageclass = 'fullwidth';
         /*передача в шаблон представление с массивом данных*/
        $this->template->content = View::factory('tutor/questions/edit', array(
            'question' => $question,
            'answers' => $answers,
            'id' => $id
        ));
    }
}