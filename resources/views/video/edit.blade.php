@extends('layouts.master')

@section('content')
<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        @if(session('sukses'))
        <div class="callout callout-success alert alert-success alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-check"></i> Sukses :</h5>
            {{session('sukses')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if(session('warning'))
        <div class="callout callout-warning alert alert-warning alert-dismissible fade show" role="alert">
            <h5><i class="fas fa-info"></i> Informasi :</h5>
            {{session('warning')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($errors->any())
        <div class="callout callout-danger alert alert-danger alert-dismissible fade show">
            <h5><i class="fas fa-exclamation-triangle"></i> Peringatan :</h5>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <form action="/video/{{$video->id}}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Data Video</h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="nama">Nama</label>
                    <input value="{{$video->nama}}" name="nama" type="text" class="form-control" id="nama" placeholder="Nama">
                    <label for="judul">Judul</label>
                    <input value="{{$video->judul}}" name="judul" type="text" class="form-control" id="judul" placeholder="Judul">
                    <label for="foto">foto</label>
                    <input value="{{$video->foto}}" name="foto" type="file" class="form-control" id="foto" placeholder="{{$video->foto}}">
                    <img src="{{ asset('foto_upload/'.$video->foto) }}" alt="" title="" style="height: 150px;width:100px;">
                    <br>
                    <label for="waktu">Waktu</label>
                    <input value="{{$video->waktu}}" name="waktu" type="datetime-local" class="form-control" id="waktu" placeholder="Waktu">
                    <!-- <label for="tampilan">Link</label>
                    <input value="{{old('tampilan')}}" name="tampilan" type="text" class="form-control" id="tampilan" placeholder="Tampilan"> -->
                    <label for="tampilan">Link</label>
                    <input value="{{$video->tampilan}}" name="tampilan" type="text" class="form-control" id="tampilan" placeholder="Tampilan">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/video/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection
