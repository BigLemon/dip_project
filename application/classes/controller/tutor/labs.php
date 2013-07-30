<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Tutor_Labs extends Controller_Index {

    public $template = 'tutor/base';

    public function action_index() {

        if (!Auth::instance()->logged_in('tutor')) {//есть ли активные сессии преподавателя
            $this->request->redirect('auth/login');//перенаправление на страницу авторизации
        }
        /*запрос на выбор все записей к модели courses*/
        $pages = ORM::factory('lab')->find_all();

        $this->template->title = 'Управление лабораторными';//вывод в шаблон переменную title
        $this->template->pageclass = 'rightsidebar';//вывод в шаблон переменную pageclass
        $this->template->content = View::factory('tutor/labs/list', array(
            'pages' => $pages       //вывод в шаблон переменной $pages 
        ));
    }

    public function action_edit() {

        if (!Auth::instance()->logged_in('tutor')) {//есть ли активные сессии преподавателя
            $this->request->redirect('auth/login');//перенаправление на страницу авторизации
        }
        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, 
                    array('id',  'title', 'condition', 'answer'));
            //обновление 
            $page = ORM::factory('exercise', $data['id'])
                ->set('title', $data['title'])
                ->set('condition', $data['condition'])
                ->set('answer', $data['answer'])
                ->update();
           
         
                $this->request->redirect('tutor/labs/');
            }

        $id = $this->request->param('id');//текущее id
        $labs = ORM::factory('lab' , $id);
        $course = ORM::factory('course')->find_all();

        $this->template->title = 'Редактирование курса';
        $this->template->pageclass = 'rightsidebar';
        /*внутрь базового шаблона подкладываем еще одно представление*/
        $this->template->content = View::factory('tutor/labs/edit', array(
            'labs' => $labs,
            'course' => $course,
        ));
    }

    /*
     * Удаление курса
     * TODO: удаление лекций, лаб и тестов
     */
    public function action_delete() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));  //получить значения из глобального массива 
            $lection = ORM::factory('lab' , $data['id'])->delete(); //запрос удаления
            $this->request->redirect('tutor/labs/');//перенаправление на страницу курсов
        }

        $id = $this->request->param('id'); //текущее id 
        $this->template->title = 'Удаление курса';//вывод в шаблон 
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('tutor/labs/delete', array(
            'id' => $id 
        ));

    }

    public function action_add() {

        if (!Auth::instance()->logged_in('tutor')) {//есть ли активные сессии преподавателя
            $this->request->redirect('auth/login');//перенаправление на страницу авторизации
        }
       $id = Auth::instance()->get_user()->id;
           // выбрать записи из таблицы по id
         $user = ORM::factory('user', $id);
        if (isset($_POST['submit'])) { 
            $data = Arr::extract($_POST,  //получить значения из глобального массива 
                    array('title', 'condition', 'id_author', 'course_id', 'answer'));
            //создание новой записи в таблице
            $page = ORM::factory('lab')->values(array(  
                'title' => $data['title'],
                'condition' => $data['condition'],
                'answer' => $data['answer'],
                'id_author' => $user->id,
                'course_id' => $data['course_id'],
            ))->create();
            if ($page) {       
                //перенаправление на список курсов
                $this->request->redirect('tutor/labs/');
            }
        }
        $labs = ORM::factory('lab')->find_all();
        $course = ORM::factory('course')->find_all(); //выбрать записи с таблицы coursescategor

        $this->template->title = 'Добавление нового курса'; //вывод в шаблон переменную title
        $this->template->pageclass = 'rightsidebar';//вывод в шаблон переменную pageclass
        $this->template->content = View::factory('tutor/labs/add', array( //вывод в шаблон форму добавления
            'course' => $course, 
            'labs' => $labs,
        ));

    }

    /*
     * Просмотр содержимого курса
     */
    public function action_view(){
        $this->template->title = 'Содержимое лабораторной';//вывод в шаблон переменную title
        $this->template->pageclass = 'rightsidebar';//вывод в шаблон переменную pageclass
        $lab_id = $this->request->param('id');//получение id курса
        $exercise = ORM::factory('exercise') //выбор лекий курса
            ->where('lab_id', '=', $lab_id)
            ->find_all();
        
        $this->template->content = View::factory('tutor/labs/view', array(
            'exercise' => $exercise,
            'lab_id' => $lab_id,
        ));
    }

  
    

}