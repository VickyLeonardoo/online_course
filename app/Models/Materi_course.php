<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Materi_course extends Model
{
    use HasFactory;

    protected $table = "materi_courses";
    protected $primaryKey = "id_materi_course";
    protected $fillable = [
        'id_course',
        'judul_materi',
        'link_materi',
        'keterangan',
        'episode'
        
    ];

}
