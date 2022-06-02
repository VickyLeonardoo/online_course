<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\MentorModel;
use App\Models\MateriModel;
use App\Models\Mentor;

class MentorController extends Controller
{
    public function __construct(){
        $this->MentorModel = new MentorModel;
        $this->MateriModel = new MateriModel;
    }
    public function home(){
        $course = DB::table('courses')
        ->where('id_mentor',Auth::guard('mentor')->user()->id_mentor)
        ->count();


        return view('mentor.home',compact('course'));
    }

    public function v_course(){
        $data = [
            'course' => $this->MentorModel->v_course()
        ];
        return view('mentor.v_course',$data);
    }

    public function v_profile(){
        return view('mentor.v_profile');
    }

    public function v_materi($id){
        $data = [
            'materi'=> $this->MateriModel->v_materi($id)
        ];
        return view('mentor.v_materi',$data);
    }

    public function update_password($id){

        Request()->validate([
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'required',
        ],[
            'password.required' => 'Password Wajib Diisi',
            'password.same' => 'Password Tidak Sama',
            'password_confirmation.required' => 'Password Wajib Diisi',
        ]);

        $data = [
            'password' => bcrypt(Request()->password)
        ];
        Mentor::where('id_mentor',$id)
        ->update($data);
        
        return redirect()->back()->withToastSuccess('Password Berhasil Diubah');
    }

}
