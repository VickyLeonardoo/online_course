<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MentorModel;
use App\Models\Enrollment;
use App\Models\CourseModel;
use App\Models\Course;
use App\Models\Jurusan;
use Http;
use App\Models\Mentor;
use DB;



class AdminController extends Controller
{
    public function __construct()
    {
        $this->MentorModel = new MentorModel;
        $this->CourseModel = new CourseModel;
    }
    public function home(){
        $course = DB::table('courses')
        ->count();
        $jurusan = DB::table('jurusans')
        ->count();
        $mentor = DB::table('mentors')
        ->where('role','1')
        ->count();
        return view('admin.home',compact('course','mentor','jurusan'));
    }

    public function v_course(){

        $data = [
            'course' => $this->CourseModel->v_courses(),
            'mentor' => $this->MentorModel->v_mentor()
        ];

        return view('admin.v_course',$data);
    }

    public function v_mentor(){
        $data = [
            'mentor' => $this->MentorModel->v_mentor()
        ];

        return view('admin.v_mentor',$data);
    }

    public function v_jurusan(){
        $data = [
            'jur' => $this->CourseModel->v_jurusan()
        ];

        return view('admin.v_jur',$data);
    }

    public function v_profile(){
        return view('admin.v_profile');
    }

    public function edit_course(Request $request,$id){
        $data = [
            'kode' => Request()->kode,
            'nama' => Request()->nama,
            'level' => Request()->level,
            'id_mentor' => Request()->mentor,
            'tools' => Request()->tools,
            'konsultasi' => Request()->konsultasi,
            'sertifikat' => Request()->sertifikat,
            'deskripsi' => Request()->deskripsi
        ];

        Course::where('id_course', $id)
        ->update($data);

        return Redirect()->back()->withToastSuccess('Data Berhasil Diubah!');
    }

    public function hapus_course($id){
        Course::where('id_course', $id)
        ->delete();
        return redirect()->back()->withToastSuccess('Data Berhasil Dihapus');
    }

    public function hapus_mentor($id){
        Mentor::where('id_mentor',$id)
        ->delete();
        return redirect()->back()->withToastSuccess('Data Mentor Berhasil Dihapus');
    }

    //API POLIBATAM 
    public function tambah_mentor(request $Request)
    {
        $nik =  Request()->nik;
        
        $response = Http::get("http://sid.polibatam.ac.id/apilogin/web/api/auth/cek-id?id={$nik}");

        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();

        $data = json_decode(json_encode($response['data']));
        $arr = array();
        return view('admin.detail_mentor')->with('body', $data);
    }

    public function store(Request $request){
        Mentor::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt(123456),
            'role' => 1,
        ]);
        return redirect()->route('v_mentor')->withToastSuccess('Mentor Berhasil Ditambahkan!');;
    }

    public function tambah_jurusan(Request $request){
        Jurusan::create([
            'kode_jur' => $request->kode,
            'nama_jur' => $request->nama,
        ]);

        return redirect()->back()->withToastSuccess('Mentor Berhasil Ditambahkan!');;

    }

    


}
