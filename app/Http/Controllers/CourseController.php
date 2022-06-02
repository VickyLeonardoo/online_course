<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use DB;
use App\Models\Enrollment;
class CourseController extends Controller
{
    public function __construct(){

    }

    public function store(Request $request){
        $course = Course::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'id_mentor' => $request->mentor,
            'deskripsi' => $request->deskripsi,
            'level' => $request->level,
            'sertifikat' => $request->sertifikat,
            'konsultasi' => $request->konsultasi,
            'tools' => $request->tools,
        ]);

        Enrollment::create([
            'id_courses' => $course->id_course,
            'id_user' => 9999999,
        ]);
        return redirect()->back()->with('berhasi','Course Berhasil Ditambahkan');
    }

    public function v_courses(){
        
    }
    
}
