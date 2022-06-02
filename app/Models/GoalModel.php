<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;
use DB;
class GoalModel extends Model
{
    public function v_goal(){
        return DB::table('goals')->get();
    }
}
