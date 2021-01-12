<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transkrip extends Model
{
    protected $table = 'transkrip';
    protected $fillable = ['nim', 'name_mhs','semester','kd_matkul','grade'];

}
