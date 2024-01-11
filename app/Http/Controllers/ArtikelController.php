<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {

        $data = Artikel::all();
        return view('artikel/index', compact('data'));
    }

    public function create()
    {
        return view('artikel.create');
    }


    public function store(Request $request)
    {

        $artikel = new Artikel;
        $artikel->tagline_artikel       = $request->input('tagline_artikel');
        $artikel->judul_artikel         = $request->input('judul_artikel');
        $artikel->isi_artikel           = $request->input('isi_artikel');
        $artikel->date_artikel          = $request->input('date_artikel');
        $artikel->dokumentasi_artikel   = $request->input('dokumentasi_artikel');
        $artikel->dokumentasi_compress  = $request->input('dokumentasi_compress');
        $artikel->slug_artikel          = $request->input('slug_artikel');
        $artikel->visible_artikel       = $request->input('visible_artikel');
        $artikel->jumlah_share          = $request->input('jumlah_share');
        $artikel->total_view            = $request->input('total_view');
        $artikel->id_author             = $request->input('id_author');
        $artikel->pilihan_editor        = $request->input('pilihan_editor');
        $artikel->kategori_cerbung      = $request->input('kategori_cerbung');
        $artikel->keyword               = $request->input('keyword');
        $artikel->save();
        return redirect()->route('artikel')->with('Data Artikel Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $data = Artikel::findOrFail($id);

        return view('artikel/show', compact('data'));
    }


    public function edit(Request $request, $id)
    {

        $artikel = Artikel::findOrFail($id);

        return view('artikel/edit', compact('artikel'));
    }



    public function update($id, Request $request)
    {

        $artikel = Artikel::where('id', $id)->first();
        $artikel->tagline_artikel       = $request->input('tagline_artikel');
        $artikel->judul_artikel         = $request->input('judul_artikel');
        $artikel->isi_artikel           = $request->input('isi_artikel');
        $artikel->date_artikel          = $request->input('date_artikel');
        $artikel->dokumentasi_artikel   = $request->input('dokumentasi_artikel');
        $artikel->dokumentasi_compress  = $request->input('dokumentasi_compress');
        $artikel->slug_artikel          = $request->input('slug_artikel');
        $artikel->visible_artikel       = $request->input('visible_artikel');
        $artikel->jumlah_share          = $request->input('jumlah_share');
        $artikel->total_view            = $request->input('total_view');
        $artikel->id_author             = $request->input('id_author');
        $artikel->pilihan_editor        = $request->input('pilihan_editor');
        $artikel->kategori_cerbung      = $request->input('kategori_cerbung');
        $artikel->keyword               = $request->input('keyword');
        $artikel->update();
        return redirect()->to('artikel/index')->with('Data Artikel Berhasil Diubah');;
    }

    public function delete($id)
    {
        Artikel::findOrFail($id)->delete();
        return redirect()->route('artikel')->with('Data Artikel Berhasil Dihapus');
    }
}
