<?php defined('SYSPATH') or die('No direct script access.');

class Model_Student extends ORM {
    protected $_table_name = 'users';
    protected $_has_many = array(
		'courses' => array(
			'model' => 'course',
			'through' => 'usercourses',
		),
        'user' => array(
			'model' => 'user',
			'through' => 'usercourses',
		),
                'tests' => array(
                    'model' => 'test', 
                    'through' => 'testresults', 
                    'foreign_key'=>'id_user',
                    'far_key'=>'id_test'),

	);
} 
