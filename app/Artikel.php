<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['id','tagline_artikel','judul_artikel','isi_artikel','date_artikel','dokumentasi_artikel','dokumentasi_compress','slug_artikel','visible_artikel','jumlah_share','total_view','id_author','pilihan_editor','kategori_cerbung','keyword'];
    
}
