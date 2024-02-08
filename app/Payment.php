<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payment';

    // protected $guarded = [];
    protected $fillable = ['name', 'jeniskelamin', 'email', 'nomer', 'kampus', 'id_jurusan',  'semester', 'foto', 'token_transaksi'];
}
