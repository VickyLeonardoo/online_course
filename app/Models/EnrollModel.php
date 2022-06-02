<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class EnrollModel extends Model
{
    public function v_enroll($id){
        return DB::table('materi_courses')
        ->where('id_course' ,$id)
        ->get();

        // return DB::table('courses')
        // ->leftJoin('enrollment','courses.id_course','=','enrollment.id_courses')
        // ->where('courses.id_course', $id)
        // ->get();
    }

    public function v_watch($id, $idc){
        return DB::table('materi_courses')
        ->join('courses','materi_courses.id_course','=','courses.id_course')
        ->where('materi_courses.id_course' ,$id)
        ->where('materi_courses.episode',$idc)
        ->get();
    }

    public function enrollment($id){
        return DB::table('enrollment')
        ->rightJoin('courses','enrollment.id_courses','=','courses.id_course')
        ->where('enrollment.id_courses', $id)
        ->get();
    }

    public function unenroll($id,$idc){
        return DB::table('enrollment')
        ->rightJoin('courses','enrollment.id_courses','=','courses.id_course')
        ->where('enrollment.id_courses', $id)
        ->where('id_user', Auth::guard('user')->user()->id_user)
        ->get();
    }

    public function delete_data($id){
        return DB::table('enrollment')
        ->where('id_enroll',$id)
        ->delete();
    }
}
