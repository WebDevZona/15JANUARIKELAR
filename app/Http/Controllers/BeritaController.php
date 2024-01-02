<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;


class BeritaController extends Controller
{

    // iki index admin
    public function index()
    {
        $berita = Berita::all();
        // dd($berita);
        // return view('index', compact(['berita']));
        return view('berita.index', compact('berita'));
    }


    // iki index langsung
    public function vide()
    {
        $berita = Berita::all();
        //dd($youtube);
        // return view('index', compact(['data']));
        return view('berita.index', compact('berita'));
    }


    // // view frondend
    // public function vidiofrondend()
    // {
    //     $youtube = Video::all();
    //     return view('index', compact('youtube'));
    // }


    public function create()
    {
        return view('berita.create');
    }

    public function store(Request $request)
    {
        $image           = $request->file('foto');
        //mengambil nama image
        $nama_image      = $image->getClientOriginalName();

        //memindahkan cover ke folder tujuan
        $image->move('foto_upload', $image->getClientOriginalName());

        $berita = new Berita;
        $berita->nama       = $request->input('nama');
        $berita->judul      = $request->input('judul');
        $berita->foto       = $nama_image;
        $berita->waktu      = $request->input('waktu');
        $berita->sumber      = $request->input('sumber');
        $berita->tampilan   = $request->input('tampilan');
        $berita->save();
        return redirect()->route('berita.index')->with('success', 'Youtube Video Berhasil Ditambahkan');
    }

    public function show($id)
    {
        $berita = Berita::findOrFail($id);

        return view('berita/show', compact('berita'));
    }

    public function edit(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita/edit', compact('berita'));
    }

    public function update($id, Request $request)
    {
        $berita = Berita::findOrFail($id);
        $berita->nama      = $request->input('nama');
        $berita->judul     = $request->input('judul');
        // $berita->foto    = $request->input('foto');
        $berita->waktu     = $request->input('waktu');
        $berita->sumber      = $request->input('sumber');
        $berita->tampilan  = $request->input('tampilan');
        $berita->save(); // Use save() instead of update()
        return redirect()->route('berita.index')->with('success', 'Video berhasil diubah');
    }


    public function delete($id)
    {
        try {
            $berita = Berita::findOrFail($id);
            $berita->delete();

            return redirect()->route('berita.index')->with('success', 'Video berhasil dihapus');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('berita.index')->with('error', 'Video tidak ditemukan');
        }
    }
}
