<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;

class MentorModel extends Model
{
    public function v_mentor(){
        return DB::table('mentors')
        ->where('role', '1')
        ->get();
    }

    public function v_course(){
        return DB::table('courses')
        ->where('id_mentor',Auth::guard('mentor')->user()->id_mentor)
        ->get();
    }

    public function update_password($id,$data){
        DB::table('mentors')->where('id_mentor',$id)->update($data);
    }
}
