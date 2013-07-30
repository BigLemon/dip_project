<?php

defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User {
    protected $_primary_key = 'id';
     protected $_table_name = 'users';
    protected $_has_many = array(
        'roles' => array('model' => 'role', 'through' => 'roles_users'),
        'tests' => array('model' => 'test', 'through' => 'testresults', 'foreign_key'=>'id_user','far_key'=>'id_test'),
        'testresults' => array('model' => 'testresult', 'through' => 'testresults','foreign_key'=>'id_user','far_key'=>'id_test'),
        'courses' => array('model' => 'course', 'through' => 'usercourses', 'foreign_key'=>'student_id','far_key'=>'course_id'),
        //'courses' => array('course' => array('through' => 'usercourses')),
//   'testresult' => array('model' => 'testresult',  'foreign_key'=>'id_user'),
    );
    
    public function labels() {
        return array(
            'username' => 'Логин',
            'email' => 'E-mail',
            'password' => 'Пароль',
            'password_confirm' => 'Повторить пароль',
            'firstname' => 'Имя',
            'lastname' => 'Фамилия',
            'sex' => 'Пол',
        );
    }

    public function rules() {
        return array(
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 32)),
                array('regex', array(':value', '/^[-\pL\pN_.]++$/uD')),
            ),
            'firstname' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 32)),
            ),
            'lastname' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 32)),
            ),
            'password' => array(
                array('not_empty'),
            ),
            'sex' => array(
                array('not_empty'),
            ),
            'email' => array(
                array('not_empty'),
                array('min_length', array(':value', 4)),
                array('max_length', array(':value', 127)),
                array('email'),
            ),
        );
    }

    public static function unique_username($username) {
        // Check if the username already exists in the database
        return !DB::select(array(DB::expr('COUNT(username)'), 'total'))
                        ->from('users')
                        ->where('username', '=', $username)
                        ->execute()
                        ->get('total');
    }
    

}

