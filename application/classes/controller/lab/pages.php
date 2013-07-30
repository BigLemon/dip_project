<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Admin_Pages extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        $pages = ORM::factory('page')->find_all();

        $this->template->title = 'Управление страницами';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/pages/list', array(
            'pages' => $pages
        ));
    }

    public function action_edit() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id', 'title', 'txt', 'url'));
            $page = ORM::factory('page', $data['id'])
                ->set('title' , $data['title'])
                ->set('txt', $data['txt'])
                ->set('url', $data['url'])
                ->update();
            if ($page) {
                $this->request->redirect('admin/pages/');
            }
        }

        $page_id = $this->request->param('id');
        $page = ORM::factory('page' , $page_id);

        $this->template->title = 'Редактирование страницы';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/pages/edit', array(
            'page' => $page
        ));
    }

    public function action_delete() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        $page_id = $this->request->param('id');
        $page = ORM::factory('page' , $page_id)->delete();
        $this->request->redirect('admin/pages/');

    }

    public function action_add() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('title', 'txt', 'url'));
            $page = ORM::factory('page')->values(array(
                'title' => $data['title'],
                'txt' => $data['txt'],
                'url' => $data['url']
            ))->create();
            if ($page) {
                $this->request->redirect('admin/pages/');
            }
        }

        $this->template->title = 'Добавление новой страницы';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/pages/add');

    }

}