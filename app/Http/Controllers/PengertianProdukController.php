<?php

namespace App\Http\Controllers;

use App\PengertianProduk;
use App\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PengertianProdukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        if (Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = PengertianProduk::get();
        return view('PengertianProduk.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }
        $datasi = Produk::get();

        return view('PengertianProduk.create', compact('datasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $image           = $request->file('foto');
        // //mengambil nama image
        // $nama_image      = $image->getClientOriginalName();

        // //memindahkan cover ke folder tujuan
        // $image->move('foto_upload', $image->getClientOriginalName());
        $PengertianProduk = new PengertianProduk;
        // $Produk->foto          = $nama_image;
        $PengertianProduk->judul             = $request->input('judul');
        $PengertianProduk->isi             = $request->input('isi');
        // $PengertianProduk->foto          = $request->input('foto');
        $PengertianProduk->ket         = $request->input('ket');
        $PengertianProduk->id_produk         = $request->input('produk');
        // $PengertianProduk->foto          = $nama_image;
        $PengertianProduk->save();
        return redirect()->route('PengertianProduk')->with('sukses', 'Data PengertianProduk Berhasil Ditambah');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $data = PengertianProduk::findOrFail($id);

        return view('PengertianProduk/show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        if (Auth::user()->level == 'admin') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }
        $PengertianProduk = PengertianProduk::findOrFail($id);
        $datasi = Produk::get();

        return view('pengertianProduk/edit', compact('PengertianProduk', 'datasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Retrieve the PengertianProduk record by ID
        $PengertianProduk = PengertianProduk::findOrFail($id);

        // Update the attributes of the model
        $PengertianProduk->judul = $request->input('judul');
        $PengertianProduk->isi = $request->input('isi');
        $PengertianProduk->ket = $request->input('ket');
        $PengertianProduk->id_produk = $request->input('id_produk');

        // Save the changes to the database
        $PengertianProduk->save();

        // Redirect with a success message
        return redirect()->to('pengertianProduk/index')->with('sukses', 'Data PengertianProduk Berhasil Diubah');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)

    {
        PengertianProduk::findOrFail($id)->delete();
        // alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('PengertianProduk')->with('sukses', 'Data PengertianProduk Berhasil Dihapus');
    }
}
