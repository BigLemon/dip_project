<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Admin_News extends Controller_Index {

    public $template = 'admin/base';

    public function action_index() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        $news = ORM::factory('new')->find_all();
        
        $this->template->title = 'Управление страницами';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/news/list', array(
            'news' => $news
        ));
    }

    public function action_add() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            
            $id = Auth::instance()->get_user()->id;
            
            $user = ORM::factory('user', $id);
            $data = Arr::extract($_POST, array('title', 'short', 'fulltext','author_id','dt'));
            $page = ORM::factory('new')->values(array(
                'title' => $data['title'],
                'short' => $data['short'],
                'fulltext' => $data['fulltext'],
                 'author_id' => $user->id,
                 'dt' => date('Y-m-d H:i:s')
                
            ))->create();
    
            if ($page) {
                $this->request->redirect('admin/news/');
            }
        }

        $this->template->title = 'Добавление новости';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/news/add');

    }
    
        public function action_edit() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            
            $id = Auth::instance()->get_user()->id;
            $user = ORM::factory('user', $id);
            $data = Arr::extract($_POST, array('id', 'title', 'short', 'fulltext','author_id','dt'));
            $page = ORM::factory('new', $data['id'])
                ->set('title', $data['title'])
                ->set('short', $data['short'])
                ->set('fulltext', $data['fulltext'])
                ->set('author_id', $user->id)
                ->set('dt', date('Y-m-d H:i:s'))    
                
                ->update();
         
    
            if ($page) {
                $this->request->redirect('admin/news/');
            }
        }
$s = $this->request->param('id');
  $new = ORM::factory('new' , $s);
        $this->template->title = 'Добавление новости';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/news/edit', array(
            'page' => $new
            ));

    }
    
        public function action_delete() {

        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));
            $page = ORM::factory('new' , $data['id'])->delete();
            $this->request->redirect('admin/news/');
        }

        $id = $this->request->param('id');
        $this->template->title = 'Удаление новости';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('admin/news/delete', array(
            'id' => $id
        ));

    }
}