<?php defined('SYSPATH') or die('No direct script access.');

class Model_Test extends ORM {
      protected $_table_name = 'tests';
       protected $_primary_key = 'id';
 //protected $_has_many = array('testresults'=>array('model' => 'testresult','foreign_key'=>'id_test','far_key'=>'id_user' ));
    protected $_has_many = array(
        'users' => array(
            'model' => 'user',
            'through' => 'testresults',
            'foreign_key'   => 'id_test',
            'far_key'=>'id_user'),
        'testresults' => array(
            'model' => 'testresult',
            //'through' => 'testresults',
            'foreign_key'   => 'id_test',
            'far_key'=>'id_user'),
        );
    protected $_belongs_to = array(
        'course' => array(
            'model' => 'course',
            'foreign_key'   => 'id'            
           ),
        );
}        

