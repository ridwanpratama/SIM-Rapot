<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table = 'rayon';

    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    protected $fillable = [
        'nama_rayon', 'guru_id'
    ];
}
