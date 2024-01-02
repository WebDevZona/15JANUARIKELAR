<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['id','nama','judul','foto','waktu','sumber','tampilan'];
}
