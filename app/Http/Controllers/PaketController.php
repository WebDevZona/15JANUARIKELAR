<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaketController extends Controller
{

    public function silver()
    {
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('paket.gold');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('paket.gold');
        }
    }
}
