<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index_Courses extends Controller_Index {

    public $template = 'index/base';

    public function action_index()
    {
        // добавляем стили
        $this->template->title = 'Курсы';
        $this->template->pageclass = 'fullwidth';
        $courses = ORM::factory('course')->find_all();

        $id = Auth::instance()->get_user();
        $user = ORM::factory('student',$id);

        $usercourses = $user->courses->find_all();
       
        $usercourses_array = array();
        foreach($usercourses as $c){
            array_push($usercourses_array, $c->id);
        }

        $this->template->content = View::factory('index/courses/allcourses', array(
            'courses' => $courses,
            'usercourses' => $usercourses_array
            ));

    }

    /*
     * Просмотр содержимого курса
     */
    public function action_view(){
        $this->template->title = 'Содержимое курса';
        $this->template->pageclass = 'fullwidth';
        $course_id = $this->request->param('id');
        $lections = ORM::factory('lection')
            ->where('course_id', '=', $course_id)
            ->find_all();
        
        $tests = ORM::factory('test')
            ->where('course_id', '=', $course_id)
            ->find_all();
        
         $lab = ORM::factory('lab')
            ->where('course_id', '=', $course_id)
            ->find_all();
    
        $id = Auth::instance()->get_user();
        $user = ORM::factory('user',$id);
     
       
      //  $xml  = glob("*.xml");
        $this->template->content = View::factory('index/courses/view', array(
            'lections' => $lections,
            'tests' => $tests,
            'lab' => $lab,
             'user' => $user,
            //'usercourses' => $usercourses,
             //'usertest' => $usercourses_array
        ));
    }

}
