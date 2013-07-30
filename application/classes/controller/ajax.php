<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {
    
    public function action_checkisunique() {
        $param = Arr::get($_POST, 'param', '');
        $value = Arr::get($_POST, 'value', '');
        $result = (bool) DB::select(array(DB::expr('COUNT(id)'), 'total'))
            ->from('users')
            ->where($param, '=', $value)
            ->execute()
            ->get('total');
        echo json_encode(array('result' => $result));
    }
    
    public function action_index(){
        echo "ajax";
    }

}
