<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserviewController extends Controller
{
    public function userview()
    {
        return view('userview.konsultasi');
    }

    public function bso()
    {
        return view('userview.paketbso');
    }
    public function bmj()
    {
        return view('userview.paketbmj');
    }
}
