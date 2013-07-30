<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Auth extends Controller_Index {

    public $template = 'index/base';

    public function action_index() {
        $this->action_login();
    }

    public function action_login() {
        if (Auth::instance()->logged_in()) {
            $this->request->redirect('user');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('username', 'password', 'remember'));

            $status = Auth::instance()->login($data['username'], $data['password'], (bool) $data['remember']);
            if ($status) {
                $this->request->redirect('user');
            } else {
                $errors = array(Kohana::message('auth/user', 'no_user'));
            }
        }

        $this->template->title = 'Авторизация';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('index/auth/login')
                ->bind('errors', $errors)
                ->bind('data', $data);
        $this->template->widget_login = null; // скрываем повторную форму справа 
    }

    public function action_register() {
        if (Auth::instance()->logged_in()) {
            $this->request->redirect('user');
        }

        if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('username', 'password', 'password_confirm', 'email', 'firstname',
                        'lastname', 'sex'));
            $users = ORM::factory('user');

            try {
                $users->create_user($_POST, array(
                    'username',
                    'password',
                    'email',
                    'firstname',
                    'lastname',
                    'sex'
                ));

                $role = ORM::factory('role')->where('name', '=', 'login')->find();
                $users->add('roles', $role);
                $this->action_login();
                $this->request->redirect('user');
            } catch (ORM_Validation_Exception $exc) {
                $errors = $exc->errors('auth');
                if (isset($errors['_external'])) {
                    $errors = Arr::merge($errors, $errors['_external']);
                    unset($errors['_external']);
                }
            }
        }
        $this->template->title = 'Регистрация';
        $this->template->pageclass = 'fullwidth';
        $this->template->content = View::factory('index/auth/register')
                ->bind('errors', $errors)
                ->bind('data', $data);
    }

    public function action_logout() {
        if (Auth::instance()->logout()) {
            $this->request->redirect();
        }
    }

    public function action_lost() {
        $this->template->title = 'Восстановление пароля';
        $this->template->pageclass = 'fullwidth';
         if (Auth::instance()->logged_in()) {
            $this->request->redirect('user');
        }
        
         if (isset($_POST['submit'])) {
            $data = Arr::extract($_POST, array('email',  'lastname'));
            $users = ORM::factory('user')
                    ->where('email', '=' ,$data['email'])
                    ->and_where('lastname', '=', $data['lastname'])
                    ->count_all();
            var_dump($users);
          
            if ($users) {
            $pass = Text::random('hexdec',15);
            $hash_pas = md5($pass);
            $query = DB::update('users')
                    ->set(array('password' => $hash_pas))
                    ->where('email', '=', $data['email']);   
            $query->execute();
            $subject = 'Востановление пароля';
            $message = "Ваш новый пароль $pass";
           // mail($data['email'], $subject, $message);
                    if (mail($data['email'], $subject, $message))
                        {
                      $errors = array(Kohana::message('auth/user', 'sent'));
                        } 
                    else {
                      $errors = array(Kohana::message('auth/user', 'fail'));
                        }
            $this->request->redirect('auth/login/');   
                
            } else {
               $errors = array(Kohana::message('auth/user', 'no'));
            }
           
               
            }
       
      $this->template->content = View::factory('index/auth/lostpassword')->bind('errors', $errors);
     }
  
  
}
