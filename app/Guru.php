<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "guru";
    protected $fillable = ['nama_guru'];

    public function mapel(){
    	return $this->hasMany('App\Mapel');
    }
}
