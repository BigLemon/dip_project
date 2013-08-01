<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Courses extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        $pages = ORM::factory('course')->find_all();

        $this->template->title = 'Управление страницами';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/courses/list', array(
            'pages' => $pages
        ));
    }

    public function action_edit() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id', 'name', 'desc', 'id_category', 'status'));
            $page = ORM::factory('course', $data['id'])
                ->set('name' , $data['name'])
                ->set('desc', $data['desc'])
                ->set('id_category', $data['id_category'])
                ->set('status', $data['status'])
                ->update();
            if ($page) {
                $this->request->redirect('admin/courses/');
            }
        }

        $id = $this->request->param('id');
        $course = ORM::factory('course' , $id);
        $cat = ORM::factory('coursescategor')->find_all();

        $this->template->title = 'Редактирование курса';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/courses/edit', array(
            'course' => $course,
            'category' => $cat
        ));
    }

    /*
     * Удаление курса
     */
    public function action_delete() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));
            $lection = ORM::factory('course' , $data['id'])->delete();
            $this->request->redirect('admin/courses/');
        }

        $id = $this->request->param('id');
        $this->template->title = 'Удаление курса';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('admin/courses/delete', array(
            'id' => $id
        ));

    }

    public function action_add() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('name', 'desc', 'id_author', 'id_category', 'status'));
            $page = ORM::factory('course')->values(array(
                'name' => $data['name'],
                'desc' => $data['desc'],
                'id_author' => $data['id_author'],
                'id_category' => $data['id_category'],
                'status' => $data['status']
            ))->create();
            if ($page) {
                $this->request->redirect('admin/pages/');
            }
        }

        $cat = ORM::factory('coursescategor')->find_all();

        $this->template->title = 'Добавление нового курса';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/courses/add', array(
            'category' => $cat,
        ));

    }

    /*
     * Просмотр содержимого курса
     */
    public function action_view(){
        $this->template->title = 'Содержимое курса';
        $this->template->pageclass = 'rightsidebar';
        $course_id = $this->request->param('id');
        $lections = ORM::factory('lection')
            ->where('course_id', '=', $course_id)
            ->find_all();

        $this->template->content = View::factory('admin/courses/view', array(
            'lections' => $lections,
            'course_id' => $course_id,
        ));
    }

    /*
     * Форма добавления лекции
     */
    public function action_lectionadd(){
        $this->template->title = 'Добавление лекции курса';
        $this->template->pageclass = 'rightsidebar';
        $course_id = $this->request->param('id');
        $this->template->content = View::factory('admin/lections/add', array(
            'course_id' => $course_id,
        ));
    }
        public function action_testadd(){
        $this->template->title = 'Добавление теста курса';
        $this->template->pageclass = 'rightsidebar';
        $course_id = $this->request->param('id');
        $this->template->content = View::factory('tutor/test/add', array(
            'course_id' => $course_id,
        ));
    }
}