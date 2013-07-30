<?php defined('SYSPATH') or die('No direct script access.');

class Model_Labresult extends ORM {
protected $_belongs_to = array(
        'user' => array(
            'model' => 'user',
            'foreign_key' => 'id_user',
            
            
        ),
      'lab' => array(
            'model' => 'lab',
            'foreign_key' => 'id',
        
        )

    );
 

} 
