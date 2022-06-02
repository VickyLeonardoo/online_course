<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;
use Auth;
use DB;

class HomeController extends Controller
{
    public function __construct(){
        $this->CourseModel = new CourseModel;
    }

    public function v_home(){
        $data = [
            'course' => $this->CourseModel->v_course(),
        ];
        return view('user.home',$data);
    }

    public function v_course($id){
        $data = [
            'm_course' => $this->CourseModel->m_course($id),
            'course' => $this->CourseModel->v_enroll($id),
        ];

        return view('user.v_detail_course',$data);
    }

    public function v_jurusan(){
        $data = [
            'course' => $this->CourseModel->v_course_all()
        ];
        return view('user.jurusan');    
    }

    public function v_jur_if(){
        $data = [
            'course' => $this->CourseModel->v_course_if()
        ];
        return view('user.jur_if',$data);    
    }

    public function v_jur_ek(){
        $data = [
            'course' => $this->CourseModel->v_course_ek()
        ];
        return view('user.jur_ek',$data);    
    }

    public function v_jur_mb(){
        $data = [
            'course' => $this->CourseModel->v_course_mb()
        ];
        return view('user.jur_mb',$data);      
    }

    public function v_jur_me(){
        $data = [
            'course' => $this->CourseModel->v_course_me()
        ];
        return view('user.jur_me',$data);    
    }
    
    public function v_goal(){
        
    }

}
