<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upd extends Model
{
    protected $table = "upd";
    protected $fillable = ['siswa_id','nama_upd','nilai_upd'];

    public function siswa()
    {
	    return $this->belongsTo('App\Siswa');
    }
}
