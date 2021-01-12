<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $fillable = ['kd_matkul', 'semester', 'nm_matkul', 'jurusan'];

    // public function category(){
    //     return $this->belongsTo('App\Category');
    // }
}
