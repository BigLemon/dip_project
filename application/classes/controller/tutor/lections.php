<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_tutor_Lections extends Controller_Index {

    public $template = 'tutor/base'; //Подключение базоваго шаблона

    public function action_index() {
/*
 * Проверка на авторизацию пользователя, если пользователь не тьютор,
 * пользователь переходит на страницу авторизации
 */
        if (!Auth::instance()->logged_in('tutor')) { 
            $this->request->redirect('auth/login');
        }

        $this->request->redirect('tutor/courses');//Перенаправление на страницу курсов
    }

    public function action_edit() {

         if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {//
            $data = Arr::extract($_POST, array('id', 'course_id', 'topic', 'txt'));
            $page = ORM::factory('lection', $data['id'])
                ->set('topic', $data['topic'])
                ->set('txt', $data['txt'])
                ->update();
            if ($page) {
                $this->request->redirect('tutor/courses/view/' . $data['course_id'] );
            }
        }

        $id = $this->request->param('id');
        $lection = ORM::factory('lection' , $id);

        $this->template->title = 'Редактирование лекции';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('tutor/lections/edit', array(
            'page' => $lection
        ));
    }

    public function action_delete() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));
            $lection = ORM::factory('lection' , $data['id'])->delete();
            $this->request->redirect('tutor/courses/');
        }

        $id = $this->request->param('id');
        $this->template->title = 'Удаление лекции';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('tutor/lections/delete', array(
            'id' => $id
        ));

    }

    /*
     * Обработчик добавления лекции
     */
    public function action_add() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('course_id', 'topic', 'txt'));
            $page = ORM::factory('lection')->values(array(
                'course_id' => $data['course_id'],
                'topic' => $data['topic'],
                'txt' => $data['txt']
            ))->create();
            if ($page) {
                $this->request->redirect('tutor/courses/view/' . $data['course_id'] );
            }
        }

    }

}