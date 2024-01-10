<?php

namespace App\Http\Controllers;

use App\Beli;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class BeliController extends Controller
{
    public function index()
    {

        if(Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = Beli::all();
        return view('beli.index', compact('datas'));
    }


    public function pembeli(Request $request)
    {

            $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'jeniskelamin' => $request->jeniskelamin,
                'nomer' => $request->nomer,
                'kampus' => $request->kampus,
                'jurusan' => $request->jurusan,
                'semester' => $request->semester,
                'role' => 'user',
            ]);
            // dd($user);

        return redirect()->route('index')->with('sukses', 'Data pengguna berhasil ditambahkan');
    }

}
