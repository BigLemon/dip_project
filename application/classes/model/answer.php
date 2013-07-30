<?php defined('SYSPATH') or die('No direct script access.');

class Model_Answer extends ORM {

   protected $_table_name = 'answers';
    protected $_has_many = array('questions' => array('through' => 'qanswers'));
}