<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Course extends Model
{
    protected $table = "courses";
    protected $primaryKey = "id_course";
    protected $fillable = [
        'kode',
        'nama',
        'id_mentor',
        'deskripsi',
        'level',
        'sertifikat',
        'konsultasi',
        'tools',
        'id_jur',
    ];

}
