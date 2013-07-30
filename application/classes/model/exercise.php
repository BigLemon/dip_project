<?php defined('SYSPATH') or die('No direct script access.');

class Model_Exercise extends ORM {

   protected $_belongs_to = array(
    'lab'    => array(
       'model'         => 'lab',
       'foreign_key' => 'lab_id',
    )
    );

}