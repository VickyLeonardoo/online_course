<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\GoalModel;
class UsersController extends Controller
{
    public function __construct(){
        $this->GoalModel = new GoalModel;
    }
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate([
            'username' => 'required|max:18',
            'email' => 'required|unique:users,email',
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'required',
        ],[
            'username.required' => 'Username wajib diisi',
            'username.max' => 'Username Maximal 18 Karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password Wajib Diisi',
            'password.same' => 'Password Tidak Sama',
            'password_confirmation.required' => 'Password Wajib Diisi',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role'=> 1,
        ]);

        Auth::login($user);

        return \redirect(route('v_keahlian'))->withToastSuccess('Pendaftaran Akun Berhasil, Silahkan Login!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $data = [
            'goal' => $this->GoalModel->v_goal(),
        ];
      

        return view('user.profile',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        Request()->validate([
            'username' => 'required|max:18',
            'email' => 'required|unique:users,email',
        ],[
            
            'username.required' => 'Username wajib diisi',
            'username.max' => 'Username Maximal 18 Karakter',
            'email.required' => 'Email wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
        ]);


        $data = [
            'email' => $request->email,
            'username' => $request->username,
            // 'goal' => $request->goal,

        ];

        // dd($data);

        User::where('id_user', Auth::guard('user')->user()->id_user)
        ->update($data);

        return \redirect()->back()->withToastSuccess('Data Berhasil Diganti');

    }

    public function update_password(Request $request){

        Request()->validate([
            'password' => 'required|required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation' => 'required',
        ],[
            
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password Miinimal 8 Karakter',
            'password.same' => 'Password Tidak Sama',
            'password_confirmation.required' => 'Password Wajib Diisi',
        ]);
        
        $data = [
            'password' => bcrypt($request->password),
        ];

        
        User::where('id_user', Auth::guard('user')->user()->id_user)
        ->update($data);

        return \redirect()->back()->withToastSuccess('Password Berhasil Diganti');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
