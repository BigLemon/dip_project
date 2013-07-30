<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Users extends Controller_Index {

    public $template = 'admin/base';//определяем базовый шаблон

    public function action_index() {

        $this->template->title = 'Пользователи';//Передача в наш шаблон переменной title со значением “Пользователи”
        $this->template->pageclass = 'fullwidth'; 
        $this->template->content = View::factory('admin/index');//передача в базовый шаблон 

               
        if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

      
        $users = ORM::factory('user')->find_all();

        $this->template->title = 'Управление Пользователи';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/users/list', array(
                    'user' => $users
                ));
         
        
    }
public function action_edit() {
     if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }

       $id = $this->request->param('id');
        $user = ORM::factory('user', $id);
        if (isset($_POST['submit'])) {
            
            $data = Arr::extract($_POST, array('id', 'firstname', 'lastname', 'email', 'role'));
            $page = ORM::factory('user', $data['id'])
                    ->set('firstname', $data['firstname'])
                    ->set('lastname', $data['lastname'])
                    ->set('email', $data['email'])
                    ->update();

            if ($data['role'] == 1) {

                //Общие сведения
                $id = $data['id'];
                $user = ORM::factory('user', $id);

                //Удаление ролей пользователя
                foreach ($user->roles->find_all() as $role) {
                    $user->remove('roles', $role);
                }

                //Добавление роли login
                $role1 = ORM::factory('role', array('name' => 'login'));
                $user->add('roles', $role1);

                $this->request->redirect('admin/users/');
            }

            if ($data['role'] == 2) {

                //Общие сведения
                $id = $data['id'];
                $user = ORM::factory('user', $id);

                //Удаление ролей пользователя
                foreach ($user->roles->find_all() as $role) {
                    $user->remove('roles', $role);
                }

                //Добавление роли admin
                $role1 = ORM::factory('role', array('name' => 'login'));
                $role2 = ORM::factory('role', array('name' => 'admin'));
                $role3 = ORM::factory('role', array('name' => 'tutor'));
                $user->add('roles', $role1);
                $user->add('roles', $role2);
                $user->add('roles', $role3);

                $this->request->redirect('admin/users/');
            }

            if ($data['role'] == 3) {

                //Общие сведения
                $id = $data['id'];
                $user = ORM::factory('user', $id);

                //Удаление ролей пользователя
                foreach ($user->roles->find_all() as $role) {
                    $user->remove('roles', $role);
                }

                //Добавление роли tutor
                $role1 = ORM::factory('role', array('name' => 'login'));
                $role2 = ORM::factory('role', array('name' => 'tutor'));
                $user->add('roles', $role1);
                $user->add('roles', $role2);

                $this->request->redirect('admin/users/');
            }

            if ($page) {
                $this->request->redirect('admin/users/');
            }
        }


        $this->template->title = 'Редактирование пользователя';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('admin/users/edit', array(
                    'user' => $user
                ));
    }

    public function action_delete() {
            if (!Auth::instance()->logged_in('admin')) {
            $this->request->redirect('auth/login');
        }
                if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('id'));
            $user = ORM::factory('user' , $data['id'])->delete();
            $this->request->redirect('admin/users/');
        }

        $id = $this->request->param('id');
        $this->template->title = 'Удаление пользователя';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('admin/users/delete', array(
            'id' => $id
        ));
    }
}