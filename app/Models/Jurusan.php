<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = "jurusans";
    protected $primaryKey = "id_jur";
    protected $fillable = [
        'kode_jur',
        'nama_jur',

    ];
}
