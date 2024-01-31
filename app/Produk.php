<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = ['nama_produk', 'produk', 'harga'];
    public function pengertianproduk()
    {
        return $this->hasMany('App\PengertianProduk');
    }
}
