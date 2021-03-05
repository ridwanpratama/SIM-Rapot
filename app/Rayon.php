<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table = "rayon";

    protected $fillable = ['nama_rayon','guru_id'];

    public function siswa(){
    	return $this->hasMany('App\Siswa');
    }
}
