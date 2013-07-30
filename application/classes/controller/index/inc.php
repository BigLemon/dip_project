<?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Index_Inc extends Controller_Index {

    public $template = 'index/base';

    public function action_index() {
         if (!Auth::instance()->logged_in()) {
            $this->request->redirect('auth/login');
        }

        $this->template->title = 'Лабораторная работа';
        $this->template->pageclass = 'fullwidth';
          
        $id = $this->request->param('id');
        $ex = ORM::factory('exercise')->where('lab_id', '=', $id)->find_all();
        $this->template->content = View::factory('index/inc/index',array(
            'ex' => $ex,
            'lab_id' => $id,
        ));
      
    }
     public function action_outresult() {

        $this->template->title = 'Главная';
        $this->template->pageclass = 'fullwidth';
        $id = Auth::instance()->get_user()->id;
      if (isset($_POST['submit']))
     {   
          $data = Arr::extract($_POST, array('stud_code','lab_id'));
          
          if(!file_exists("user_{$id}")) {mkdir("user_{$id}", 0777);} // создаем папку, если не существует
          $filename = "lab_".$data["lab_id"];
          $mysql_exists = false;
          
          if(strpos($data['stud_code'], "mysql") >= 0)
                {
                    $mysql_exists = true;
                    if(!file_exists("user_{$id}/db.config"))
                    {
                        $tempsql = mysql_pconnect("localhost", "root", "");
                        mysql_query("CREATE database `user_{$id}`;", $tempsql);
                        mysql_query("GRANT ALL PRIVILEGES ON `user_{$id}`.* TO \"user_{$id}\"@\"%\" IDENTIFIED BY \"\";", $tempsql);
                        mysql_close($tempsql);
                        
                        $newconfig = <<<CONF
<?php
define("HOST", "localhost");
define("DBNAME", user_{$id});
define("USER", user_{$id});
define("PASSWORD", "");
?>
CONF;
                            $conffile = fopen("user_{$id}/db.config", "w");
                            fwrite($conffile, $newconfig);
                            fclose($conffile);
                    }
                    $newcode = <<<NC
<?php include("db.config"); ?>
{$data['stud_code']}
NC;
                }
          $file = "user_{$id}/{$filename}.php";
          $fp = fopen($file, "w"); // Открываем файл в режиме записи 
          if($mysql_exists) {$test = fwrite($fp, $newcode);} else {$test = fwrite($fp, $data['stud_code']);} // Запись в файл
          fclose($fp);
        
      }
        $ex = ORM::factory('exercise')->where('lab_id', '=', $data['lab_id'])->find_all();
       
       foreach ($ex as $e) {
           //var_dump($e->answer);
           similar_text($data['stud_code'],$e->answer,$percent);
           echo $percent;
       }
       switch ($percent){
    case ($percent>=81):
        $percent = 5;
     break;
    case (($percent>=61) && ($percent<=80)):
        $percent = 4;
        break;
    case (($percent>=41) && ($percent<=60)):
       $percent = 3;
        break;
    case (($percent>=21) && ($percent<=40)):
        $percent = 2;
        break;
    case (($percent>=0) && ($percent<=20)):
        $percent = 1;
        break;
    default:
        echo "Невозможно поставить оценку.";
   break;
       }
 $res = ORM::factory('labresult') ->where('id_user', '=', $id)->and_where('id_lab', '=', $_POST['lab_id']);
        $countres = $res->count_all();
       // print_r($res);
        if ($countres == 0){    
        $result = ORM::factory('labresult')->values(array(
            'id_user' => Auth::instance()->get_user(),
            'id_lab' => $_POST['lab_id'],
            'dt' => date('Y-m-d') ,
            'result' => $percent,
        ))->create();
                             }
        else {
            $query = DB::update('labresults')
                    ->set(array('result' => $percent))
                    ->where('id_user', '=', $id)->and_where('id_lab', '=', $_POST['lab_id']);   
            $query->execute();
             }       
        $this->template->content = View::factory('index/inc/outresult',array(
            'test' => $test,
            'id' => $id,
            'filename' => $filename,
            'lab_id' => $data['lab_id'],
            'ex' => $ex,
            'stud_code' => $data['stud_code'],
            'percent' => $percent,
           // 'tt'=>$tt
        ));
        
    
    }

}