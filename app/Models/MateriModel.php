<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class MateriModel extends Model
{
    public function v_materi($id){
        return DB::table('materi_courses')
        ->join('courses','materi_courses.id_course','=','courses.id_course')
        ->where('materi_courses.id_course',$id)
        ->get();
    }
}
