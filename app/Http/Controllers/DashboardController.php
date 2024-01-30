<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(User $pengguna)
    {

        // $data_login = \App\Login::orderByRaw('created_at DESC')->limit(25)->get();
        $data_admin = \App\User::where('role', "user")->get();
        // $data_petugas = \App\Tendik::all();
        // $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();
        return view('dashboard', compact('data_admin'));
    }

    public function siswadashboard(User $pengguna, $id)
    {
        $pesdik = \App\Pesdik::where('id', $id)->get();
        $id_pesdik_login = $pesdik->first();

        $data_login = \App\Login::orderByRaw('created_at DESC')->limit(20)->get();
        $data_admin = \App\User::where('role', "admin")->get();
        $data_petugas = \App\Tendik::all();
        $data_pengumuman = \App\Pengumuman::orderByRaw('created_at DESC')->limit(5)->get();
        return view('dashboard', compact('data_admin', 'data_login', 'data_pengumuman', 'data_petugas', 'id_pesdik_login'));
    }

    public function data()
    {
        // Retrieve the data you want to pass to the view
        $regulerData = [
            'type' => 'Reguler',
            'level' => 'Silver',
            'price' => 'Rp 47.000',
            'features' => [
                '1 Sesi',
                '1 Jam Konsultasi',
                // Add other features as needed
            ],
            'descriptions' => [
                'Topik penelitian.',
                'Variabel penelitian.',
                'Objek penelitian.',
                'Judul penelitian.',
                'Rumusan masalah penelitian.',
                'Dasar teori berdasarkan variabel yang digunakan.',
                // Add other descriptions as needed
            ],
        ];

        // Pass the data to the view
        return view('dashboard', compact('regulerData'));
    }
}
