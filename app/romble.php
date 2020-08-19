<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class romble extends Model
{
    protected $fillable = [
        'id','tingkat','jurusan','kelas','romble','walas'
    ];

    public $incrementing = false;
}
