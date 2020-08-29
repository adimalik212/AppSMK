<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class angRomble extends Model
{
    protected $fillable = [
        'id','idRomble','idPd'
    ];

    public $incrementing = false;
}
