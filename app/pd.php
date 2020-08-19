<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pd extends Model
{
    protected $fillable = [
        'id','nama','gender','tempat','tanggal','ibu','nik','nisn','asal','hp','ket','alamat','desa','kec','kab','prov','tms','img'
    ];
    public $incrementing = false;
}
