<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{

    protected $table = 'mentor';

    // protected $guarded = [];
    protected $fillable = ['nama', 'kelas', 'foto', 'id_jurusan', 'publish'];

    public function jurusan()
    {
        return $this->belongsTo('App\jurusan', 'id_jurusan');
    }
}
