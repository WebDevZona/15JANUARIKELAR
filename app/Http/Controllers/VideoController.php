<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    
    public function index()
    {

        $data = Video::get();
        return view('video.index', compact('data'));
    }

    public function create()
    {
        return view('video.create');
    }

    public function store(Request $request)
    {
        $image           = $request->file('foto');
        //mengambil nama image
        $nama_image      = $image->getClientOriginalName();
        
        //memindahkan cover ke folder tujuan
        $image->move('foto_upload',$image->getClientOriginalName());

        $video = new Video;
        $video->nama       = $request->input('nama');
        $video->judul      = $request->input('judul');
        $video->foto       = $nama_image;
        $video->waktu      = $request->input('waktu');
        $video->tampilan   = $request->input('tampilan');
        $video->save();
        return redirect()->route('video')->with('Data Video Berhasil Ditambahkan');
    
    }


    public function show($id)
    {
       $data = Video::findOrFail($id);
    
        return view('video/show', compact('data'));
    }

    public function edit(Request $request,$id)
    {   
        
        $video = Video::findOrFail($id);
    
        return view('video/edit', compact('video'));

    
    }


    public function update($id, Request $request)
    {
        $video = Video::where('id', $id)->first();
        $video->nama       = $request->input('nama');
        $video->judul      = $request->input('judul');
        // $video->foto       = $request->input('foto');
        $video->waktu      = $request->input('waktu');
        $video->tampilan   = $request->input('tampilan');
        $video->update();
        return redirect()->to('video/index')->with('Data Video Berhasil Diubah');;
       
    }


    public function delete($id)
    {
        Video::findOrFail($id)->delete();
            return redirect()->route('video')->with('Data Viddeo Berhasil Dihapus');
        
    }
}
