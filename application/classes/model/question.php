<?php defined('SYSPATH') or die('No direct script access.');

class Model_Question extends ORM {

  protected $_table_name = 'questions';

  protected $_has_many = array(
        'qanswer' => array(
            'model' => 'qanswer',
            'foreign_key' => 'question_id',
            )
        );
}