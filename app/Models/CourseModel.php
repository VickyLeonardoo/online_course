<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;

class CourseModel extends Model
{
    public function v_course(){
        return DB::table('courses')->get();
    }

    public function v_courses(){
        return DB::table('courses')
        ->join('mentors','courses.id_mentor','=','mentors.id_mentor')
        ->get();
    }

    public function m_course($id){
        return DB::table('enrollment')
        ->rightJoin('courses','enrollment.id_courses','=','courses.id_course')
        ->where('enrollment.id_courses', $id)
        ->get();
    }

    public function v_enroll($id){
        return DB::table('courses')
        ->where('id_course',$id)
        ->get();
    }

    public function v_jurusan(){
        return DB::table('jurusans')
        ->get();
    }

    public function v_course_all(){
        return DB::table('courses')
        ->where('id_jur','1')
        ->get();
    }

    public function v_course_if(){
        return DB::table('courses')
        ->where('id_jur','1')
        ->get();
    }

    public function v_course_ek(){
        return DB::table('courses')
        ->where('id_jur','2')
        ->get();
    }

    public function v_course_mb(){
        return DB::table('courses')
        ->where('id_jur','3')
        ->get();
    }

    public function v_course_me(){
        return DB::table('courses')
        ->where('id_jur','5')
        ->get();
    }
}
