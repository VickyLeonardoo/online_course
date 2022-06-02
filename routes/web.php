<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\WatchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
})->name('v_login');

Route::get('/register', function () {
    return view('register');
});

Route::post('/proses_login',[AuthController::class,'proses_login']);
Route::get('/logout',[AuthController::class,'logout']);
route::post('/save_register',[UsersController::class,'store']);

Route::group(['middleware' => ['auth:user']],function(){
    Route::group(['middleware' => ['cek_login:1']],function(){
        Route::get('/home',[HomeController::class,'v_home'])->name('home');
        Route::get('/detail-course-{id}',[HomeController::class,'v_course']);
        Route::post('/tambah-enroll',[EnrollController::class,'tambah_enroll']);
        Route::get('/materi-{id}-chapter-{idc}',[WatchController::class,'v_watch']);
        Route::get('/edit-profile',[UsersController::class,'edit']);
        Route::get('/seluruh-jurusan',[HomeController::class,'v_jurusan']);
        Route::get('/jurusan-informatika',[HomeController::class,'v_jur_if']);
        Route::get('/jurusan-elektro',[HomeController::class,'v_jur_ek']);
        Route::get('/jurusan-mesin',[HomeController::class,'v_jur_me']);
        Route::get('/jurusan-manajemen-bisnis',[HomeController::class,'v_jur_mb']);
        Route::POST('/edit-password',[UsersController::class,'update_password']);
        Route::POST('/update-profile',[UsersController::class,'update']);

        //    Route::get('/home',[HomeController::class,'v_home'])->name('v_home');
    //    Route::get('/keahlian',[HomeController::class,'v_keahlian'])->name('v_keahlian');       
    //    Route::get('/home-enroll-{id}',[HomeController::class,'v_enroll'])->name('v_enroll');
    //    Route::get('/home-kelas-saya',[HomeController::class,'v_my_course'])->name('v_my_course');
    //    Route::get('/home-daftar-kelas',[HomeController::class,'v_daftar_kelas'])->name('v_daftar_kelas');
    //    Route::post('/tambah_enroll',[EnrollController::class,'tambah_enroll']);
    //    Route::get('/home-akun',[UsersController::class,'show']);
    //    Route::post('/ganti_password',[UsersController::class,'edit']);
    //    Route::get('/unenroll-{id}',[EnrollController::class,'unenroll']);
   });
   });


Route::group(['middleware' => ['auth:mentor']],function(){
    Route::group(['middleware' => ['cek_login:2']],function(){
        Route::get('/admin',[AdminController::class,'home'])->name('admin_home');
        Route::get('/admin-daftar-course',[AdminController::class,'v_course']);
        Route::get('/admin-daftar-mentor',[AdminController::class,'v_mentor'])->name('v_mentor');
        Route::get('/admin-daftar-jurusan',[AdminController::class,'v_jurusan'])->name('v_jurusan');
        Route::get('/admin-profile',[AdminController::class,'v_profile']);
        Route::post('/tambah_course',[CourseController::class,'store']);
        Route::post('/admin-edit-course-{id}',[AdminController::class,'edit_course']);
        Route::post('/admin-hapus-course-{id}',[AdminController::class,'hapus_course']);
        Route::post('/admin-hapus-mentor-{id}',[AdminController::class,'hapus_mentor']);
        Route::post('/admin-tambah-mentor',[AdminController::class,'tambah_mentor']);
        Route::post('/admin-simpan-mentor',[AdminController::class,'store']);        
        Route::post('/admin-tambah-jurusan',[AdminController::class,'tambah_jurusan']);

    });
       });

Route::group(['middleware' => ['auth:mentor']],function(){
    Route::group(['middleware' => ['cek_login:1']],function(){
        Route::get('/mentor',[MentorController::class,'home'])->name('mentor_home');
        Route::get('/mentor-daftar-course',[MentorController::class,'v_course'])->name('mentor_course');
        Route::get('/mentor-daftar-materi',[MentorController::class,'v_materi'])->name('mentor_materi');
        Route::get('/mentor-profile',[MentorController::class,'v_profile']);
        Route::post('/mentor-tambah-materi-{id}',[MateriController::class,'store']);
        Route::get('/mentor-daftar-materi-course-{id}',[MentorController::class,'v_materi']);
        Route::post('/mentor-ubah-materi-{id}',[MateriController::class,'update']);
        Route::post('/mentor-hapus-materi-{id}',[MateriController::class,'delete']);
        Route::post('/mentor-update-password-{id}',[MentorController::class,'update_password']);


        


    });
       });




