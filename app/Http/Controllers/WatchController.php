<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel;
use App\Models\EnrollModel;
use DB;
use Auth;

class WatchController extends Controller
{
    public function __construct()
    {
        $this->CourseModel = new CourseModel;
        $this->EnrollModel =     new EnrollModel;
    }
    
    public function v_watch($id, $idc){
        $data = [
            'course' => $this->EnrollModel->v_watch($id,$idc),
        ];

        $data1 = [
            'chapter' => $this->EnrollModel->v_enroll($id),
            'un' => $this->EnrollModel->unenroll($id,$idc)

        ];
        return view('user.watch',$data,$data1);

    }
}
