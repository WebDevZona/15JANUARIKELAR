<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youtube extends Model
{
    protected $table = 'youtube';
    protected $fillable = ['id','nama','judul','foto','waktu','tampilan'];
}
