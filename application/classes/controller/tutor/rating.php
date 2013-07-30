 <?php defined('SYSPATH') or die('No direct script access.');
/*
 * Главная страница
 */
class Controller_Tutor_Rating extends Controller_Index {

    public $template = 'tutor/base';

    public function action_index() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }
       
     
         $id = Auth::instance()->get_user()->id;   
         $user = ORM::factory('user', $id);
         $course = ORM::factory('course')
                ->where('id_author', '=', $id)
                ->find_all();
      
       
        $this->template->title = 'Успеваемость студентов';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('tutor/rating/rating', array(
             'course'=>$course
           
        ));
    }

     /*
     * Просмотр успеваемости студента
     */
    public function action_view(){
       
        $this->template->title = 'Успеваемость по курсу';
        $this->template->pageclass = 'rightsidebar';
        $course_id = $this->request->param('id');
        
        $tests = ORM::factory('test')->where('course_id', '=', $course_id)->find_all();
        $lab = ORM::factory('lab')->where('course_id', '=', $course_id)->find_all();
        $user_course = ORM::factory('user')
         ->join('usercourses','INNER')
         ->on('usercourses.student_id','=', 'user.id')
         ->where('usercourses.course_id','=', DB::expr($course_id))
         ->find_all();
             
 //$a = count($user_course); echo $a;
        $users = DB::select('id','lastname','firstname')
                 ->from('users')
                 ->join('usercourses','inner')
                 ->on('users.id', '=','usercourses.student_id' )
                  -> where('usercourses.course_id', '=', DB::expr($course_id))
                 ->execute();
        /*foreach($user_course as $user)
        {
           // foreach($tests as $t)
        // {
       // var_dump($user->id);
        $result = ORM::factory('testresult')
                ->where('testresult.id_user', '=', DB::expr($user->id))
                ->and_where(('testresult.id_test'), '=', DB::expr($t->id))
                ->find_all();
        echo "</br>";
       //var_dump($result);
       // }
       }*/
       foreach($users as $user)
        {
            print_r($user['id']).'</br>';
       $courses = DB::select('result')
                 ->from('testresults')
                 ->join('tests','inner')
                 ->on('tests.course_id', '=', DB::expr($course_id))
                -> where('testresults.id_user', '=', DB::expr($user['id']))
                -> and_where('testresults.id_test', '=','tests.id')
                ->execute()->as_array();
         }
        /* if (!empty($courses))
      {
          print_r($courses);
      }else
      {
          echo "Empty";
      }*/
 //print_r($courses);
 /***
  * 
  * SELECT * FROM `testresults` 
inner join tests on tests.course_id=1 where testresults.id_user = 1 and testresults.id_test = tests.id
  * 
  */
         /* //$courses = DB::select('lastname','firstname','result')
              // ->from('users','testresults')
               //->join('usercourses','inner')
               //->on('usercourses.course_id', '=', DB::expr($course_id))
                ->join('tests','inner')
                ->on('tests.course_id', '=', DB::expr($course_id))
               //->where('usercourses.student_id', '=', 'users.id')
                ->and_where('testresults.id_test', '=', 'test.id')
                ->and_where('testresults.id_user', '=', 'users.id')
               ->execute()->as_array();*/
       //foreach ($courses as $r){
     
      /*if (!empty($courses))
      {
          print_r($courses);
      }else
      {
          echo "Empty";
      }*/
        $this->template->content = View::factory('tutor/rating/view', array(
            'user' => $users,
            'courses'=>$courses,
            'tests' => $tests,
            'lab' => $lab,
            //'row' => $row,
            
            
           // 'usercourses'=>$usercourses,
        ));
    }
    public function action_test(){
       
        $this->template->title = 'Успеваемость по курсу';
        $this->template->pageclass = 'rightsidebar';
        $id = $this->request->param('id');
     //   var_dump($id);
        
        $users = ORM::factory('user')->find_all();
        //$tests = ORM::factory('test')->where('id', '=', $id)->find_all()->as_array();
           $tests = DB::select('id','type')
                 ->from('tests')
                 -> where('tests.id', '=', DB::expr($id))
                 ->execute();
           foreach($tests as $k => $v )
          {
          print_r ($k);
          print_r ($v);
        
           }
        //var_dump($tests['type']);
        $query = DB::select()->from('users')->
                
                join('testresults')
                ->on('testresults.id_user', '=', 'users.id')
                ->where('testresults.id_test', '=', $id)
                ->execute();
       // print_r($query);
       
        $this->template->content = View::factory('tutor/rating/test', array(
            'users' => $users,
            'tests' => $tests,
            'query' => $query,
            
            
          
        ));
    }

 public function action_repeat() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }
        if (isset($_POST['submit'])) {
            print_r($_POST);
        }
        
     
         $id = Auth::instance()->get_user()->id;   
         $user = ORM::factory('user', $id);
        $course = ORM::factory('course')
                ->where('id_author', '=', $id)
                ->find_all();
      
       
        $this->template->title = 'Успеваемость студентов';
        $this->template->pageclass = 'rightsidebar';
        $this->template->content = View::factory('tutor/rating/rating', array(
             'course'=>$course
           
        ));
    }
    public function action_lab() {

        if (!Auth::instance()->logged_in('tutor')) {
            $this->request->redirect('auth/login');
        }
        $this->template->title = 'Успеваемость по лабораторным';
        $this->template->pageclass = 'fullwidth';
        $id = $this->request->param('id');
       //var_dump($id);
        
        $users = ORM::factory('user')->find_all();
        $query = DB::select()->
                from('labresults', 'users')
                ->where ('labresults.id_lab', '=', DB::expr($id))
                ->and_where('labresults.id_user', '=',$users['id'] )
               
                ->execute();
       // $user1 = ORM::factory('user')->where('user.id', '=',$query['id_user'] );
        /*foreach ($user1 as $value) 
            {
        //var_dump($query['id']);
        var_dump($value);
            }*/
       
        $this->template->content = View::factory('tutor/rating/lab_view', array(
            //'users' => $users,
            'query' => $query,
        ));
    }
}