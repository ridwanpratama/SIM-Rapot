<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $fillable = ['nis', 'nama_siswa', 'rombel', 'rayon_id', 'jurusan_id'];
}
