<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Tutor_Exercise extends Controller_Index {

    public $template = 'tutor/base';

    /*
     * Обработчик добавления лекции
     */
    public function action_add() {

        if (!Auth::instance()->logged_in('tutor')) {//есть ли активные сессии преподавателя
            $this->request->redirect('auth/login');//перенаправление на страницу авторизации
        }
        /*Добавление вопроса*/
        if (isset($_POST['submit'])) {
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
                    $answer = ORM::factory('answer')->values(array(
                        'value' => $v,
                        'right' => isset($data['right'][$k])? 1 : 0,
                    ))->create();
                   //добавление в связующую таблицу
                    $qans = ORM::factory('qanswer')->values(array(
                        'question_id' => $page->id,
                        'answer_id' => $answer->id,
                    ))->create();
                }
                $this->request->redirect('tutor/tests/view/' . $data['id_test']);
            }
            
        }

        $id_test = $this->request->param('id');
        $this->template->title = 'Новый вопрос';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('tutor/questions/add', array(
            'id_test' => $id_test
        ));

    }



    public function action_delete() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));
            
           
            //удаление вариантов ответа
            $answers = ORM::factory('answer')->
                    where('id_question', '=', $data['id'])->find_all();
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
                    array('id', 'lab_id', 'title', 'condition', 'answer'));
            //обновление 
            $page = ORM::factory('exercise', $data['id'])
                ->set('lab_id', $data['lab_id'])
                ->set('title', $data['title'])
                ->set('condition', $data['condition'])
                ->set('answer', $data['answer'])
                ->update();
           
         
                $this->request->redirect('tutor/labs/view/' . $data['lab_id']);
            }
        

        $id = $this->request->param('id');//текущее id 
        $exercise = ORM::factory('exercise' , $id);//выбор из таблицы по id 
        $lab = ORM::factory('lab')->find_all();
        
        
        
        $this->template->title = 'Редактирование задачи';//передача в шаблон title
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('tutor/exercise/edit', array(
            'exercise' => $exercise,
            'id' => $id,
            'lab' =>$lab,
        ));
    }
}