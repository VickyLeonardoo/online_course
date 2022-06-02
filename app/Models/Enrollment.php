<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = "enrollment";
    protected $primaryKey = "id_enroll";
    protected $fillable = [
        'id_enroll',
        'id_courses',
        'id_user',
    ];

    // public function course(){
    //     return $this->belongsTo('App\Models\Course');

    // }
}
