<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = ['id','nama','judul','foto','waktu','tampilan'];
    
}
