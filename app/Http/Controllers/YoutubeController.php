<?php

use Illuminate\Support\Facades\Route;
namespace App\Http\Controllers;
use App\Youtube;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class YoutubeController extends Controller
{

    // iki index admin
    public function index()
    {
        $youtube = Youtube::all();
        // dd($youtube);
        // return view('index', compact(['youtube']));
        return view('youtube.index', compact('youtube'));

    }



    // // view frondend
    // public function vidiofrondend()
    // {
    //     $youtube = Video::all();
    //     return view('index', compact('youtube'));
    // }


    public function create()
    {
        return view('youtube.create');
    }

    public function store(Request $request)
    {
        $image           = $request->file('foto');
        //mengambil nama image
        $nama_image      = $image->getClientOriginalName();

        //memindahkan cover ke folder tujuan
        $image->move('foto_upload',$image->getClientOriginalName());

        $youtube = new Youtube;
        $youtube->nama       = $request->input('nama');
        $youtube->judul      = $request->input('judul');
        $youtube->foto       = $nama_image;
        $youtube->waktu      = $request->input('waktu');
        $youtube->tampilan   = $request->input('tampilan');
        $youtube->save();
        return redirect()->route('youtube.index')->with('success', 'Youtube Video Berhasil Ditambahkan');

    }

    public function show($id)
    {
        $youtube = Youtube::findOrFail($id);

        return view('youtube/show', compact('youtube'));
    }

    public function edit(Request $request, $id)
    {
        $youtube = Youtube::findOrFail($id);
        return view('youtube/edit', compact('youtube'));
    }

    public function update($id, Request $request)
    {
        $youtube = Youtube::findOrFail($id);
        $youtube->nama      = $request->input('nama');
        $youtube->judul     = $request->input('judul');
        // $youtube->foto    = $request->input('foto');
        $youtube->waktu     = $request->input('waktu');
        $youtube->tampilan  = $request->input('tampilan');
        $youtube->save(); // Use save() instead of update()
        return redirect()->route('youtube.index')->with('success', 'Video berhasil diubah');
    }


    public function delete($id)
    {
        try {
            $youtubeVideo = Youtube::findOrFail($id);
            $youtubeVideo->delete();

            return redirect()->route('youtube.index')->with('success', 'Video berhasil dihapus');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('youtube.index')->with('error', 'Video tidak ditemukan');
        }
    }


}






