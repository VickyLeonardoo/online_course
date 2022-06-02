<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enrollment;
use Auth;

class EnrollController extends Controller
{
    public function tambah_enroll(Request $request){
        Enrollment::create([
            'id_courses' => $request->id_course,
            'id_user' => Auth::guard('user')->user()->id_user,
        ]);
        return Redirect()->back()->withToastSuccess('Enroll Berhasil!');
    }
}
