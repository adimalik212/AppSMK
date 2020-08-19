<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ptk extends Model
{
    protected $fillable = [
        'id','nama','gender','tempat','tanggal','ibu','nik','hp','email','alamat','desa','kec','kab','prov','tmt','img'
    ];
    public $incrementing = false;
}
