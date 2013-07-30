<?php defined('SYSPATH') or die('No direct script access.');

class Model_Lab extends ORM {

    protected $_belongs_to = array(
    'course'    => array(
       'model'         => 'course',
       'foreign_key' => 'course_id',
    )
    );

}