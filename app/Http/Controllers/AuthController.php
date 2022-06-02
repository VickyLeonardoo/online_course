<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function proses_login(Request $request)
    {
        request()->validate ( 
            [
                'email' => 'required',
                'password' => 'required',
            ]);

            $kredensil = $request->only('email','password');
            
            if (Auth::guard('user')->attempt($kredensil)) {
            
                $user = Auth::guard('user')->user();
                if ($user->role == '1') {
                    return redirect()->intended('home');
                }
                
            }elseif (Auth::guard('mentor')->attempt($kredensil)) {
                $user = Auth::guard('mentor')->user();
                if ($user->role == '1') {
                    return redirect()->intended('mentor');
                }
                else if($user->role == '2') {
                    return redirect()->intended('admin');
                }
            }
            return redirect('/login')->with('pesan','Maaf Username atau Password anda salah');
    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('/login');
    }
}
