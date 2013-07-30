<?php defined('SYSPATH') or die('No direct script access.');

class Model_Course extends ORM {
 protected $_table_name = 'courses';
    protected $_belongs_to = array(
        'category' => array(
            'model' => 'coursescategor',
            'foreign_key' => 'id_category',
        )
    ); 
    protected $_has_many = array(
       
        'users' => array('model' => 'user', 
            'through' => 'usercourses', 
            'foreign_key'=>'course_id',
            'far_key'=>'student_id'),
         'tests' => array(
             'model' => 'test', 
            'foreign_key'=>'course_id'),
          'lab' => array(
             'model' => 'lab', 
            'foreign_key'=>'course_id'),
        );

}

