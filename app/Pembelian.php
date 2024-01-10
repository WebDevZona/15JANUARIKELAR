<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// Pembelian.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jeniskelamin',
        'email',
        'nomer',
        'kampus',
        'jurusan',
        'semester',
    ];
}

