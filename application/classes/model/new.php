<?php defined('SYSPATH') or die('No direct script access.');

class Model_New extends ORM {
    protected $_belongs_to = array(
        'author' => array(
            'model' => 'user',
            'foreign_key' => 'author_id',
        )
    );
} 
