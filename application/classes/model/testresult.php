<?php defined('SYSPATH') or die('No direct script access.');

class Model_Testresult extends ORM {
protected $_belongs_to = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'id_user',
            
            
        ),
      'test' => array(
            'model' => 'test',
            'foreign_key' => 'id',
        
        )

    );
 

} 
