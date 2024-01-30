<?php

namespace App\Http\Controllers;

// use App\Beli;
use App\Payment;
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
        if (Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = Payment::all();
        return view('beli.index', compact('datas'));
    }

    public function create()
    {
        return view('beli.create');
    }

    public function store(Request $request)
    {
        $user = Payment::create([
            'email' => $request->email,
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'nomer' => $request->nomer,
            'kampus' => $request->kampus,
            'jurusan' => $request->jurusan,
            'semester' => $request->semester,
            'role' => 'user',
        ]);

        $payment = Payment::create([
            'user_id' => $user->id,
            'foto' => $request->foto,
            // Sesuaikan dengan kolom-kolom lainnya
        ]);


        return view('beli.index')->with('sukses', 'Data pengguna berhasil ditambahkan');
    }

    // public function edit($id)
    // {
    //     $datas = Payment::findOrFail($id);
    //     return view('beli.edit', compact('datas'));
    // }

    // public function edit($id)
    // {
    //     // Retrieve the data for the specified ID from your model

    //     $data = Payment::findOrFail($id);


    //     // Pass the data to the view
    //     return view('beli.edit', compact('data'));
    // }


    // public function update(Request $request, $id)
    // {
    //     // Validasi dan update data sesuai kebutuhan
    //     $data = Payment::findOrFail($id);
    //     $data->update([
    //         'foto' => $request->foto,
    //         // Sesuaikan dengan kolom-kolom lainnya
    //     ]);

    //     return view('beli.index')->with('sukses', 'Data pengguna berhasil diperbarui');
    // }


    public function destroy($id)
    {
        $data = Payment::findOrFail($id);
        $data->delete();

        return redirect()->route('beli.index')->with('sukses', 'Data pengguna berhasil dihapus');
    }
}
