<?php defined('SYSPATH') or die('No direct script access.');

class Model_Message extends ORM {

    protected $_belongs_to = array(
        'from' => array(
            'model' => 'user',
            'foreign_key' => 'from_id',
        ),
        'to' => array(
            'model' => 'user',
            'foreign_key' => 'to_id'
        )

    );

}