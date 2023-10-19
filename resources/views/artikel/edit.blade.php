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
        <form action="/artikel/{{$artikel->id}}/update" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Edit Data Artikel</h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="tagline_artikel">Tagline Artikel</label>
                    <input value="{{$artikel->tagline_artikel}}" name="tagline_artikel" type="text" class="form-control" id="tagline_artikel" placeholder="Tagline" >

                    <label for="judul_artikel">Judul Artikel</label>
                    <input value="{{$artikel->judul_artikel}}" name="judul_artikel" type="text" class="form-control" id="judul_artikel" placeholder="Judul" >

                    <label for="isi_artikel">Isi Artikel</label>
                    <input value="{{$artikel->isi_artikel}}" name="isi_artikel" type="text" class="form-control" id="isi_artikel" placeholder="Isi Artikel" >

                    <label for="date_artikel">Tanggal Artikel</label>
                    <input value="{{$artikel->date_artikel}}" name="date_artikel" type="datetime-local" class="form-control" id="date_artikel" placeholder="Tanggal" >

                    <label for="dokumentasi_artikel">Dokumentasi Artikel</label>
                    <input value="{{$artikel->dokumentasi_artikel}}" name="dokumentasi_artikel" type="text" class="form-control" id="dokumentasi_artikel" placeholder="Dokumentasi" >

                    <label for="dokumentasi_compress">Dokumentasi Compress</label>
                    <input value="{{$artikel->dokumentasi_compress}}" name="dokumentasi_compress" type="text" class="form-control" id="dokumentasi_compress" placeholder="Compress" >

                    <label for="slug_artikel">Slug Artikel</label>
                    <input value="{{$artikel->slug_artikel}}" name="slug_artikel" type="text" class="form-control" id="slug_artikel" placeholder="Slug" >

                    <label for="visible_artikel">Visible Artikel</label>
                    <input value="{{$artikel->visible_artikel}}" name="visible_artikel" type="text" class="form-control" id="visible_artikel" placeholder="Visible" >

                    <label for="jumlah_share">Jumlah Share</label>
                    <input value="{{$artikel->jumlah_share}}" name="jumlah_share" type="number" class="form-control" id="jumlah_share" placeholder="Jumlah Share" >

                    <label for="total_view">Total View</label>
                    <input value="{{$artikel->total_view}}" name="total_view" type="number" class="form-control" id="total_view" placeholder="Total View" >

                    <label for="id_author">Id Author</label>
                    <input value="{{$Artikel->id_author}}" name="id_author" type="number" class="form-control" id="id_author" placeholder="Id Author" >

                    <label for="pilihan_editor">pilihan Editor</label>
                    <input value="{{$Artikel->pilihan_editor}}" name="pilihan_editor" type="number" class="form-control" id="pilihan_editor" placeholder="Pilihan Editor" >

                    <label for="kategori_cerbung">Kategori Cerbung</label>
                    <input value="{{old('kategori_cerbung')}}" name="kategori_cerbung" type="text" class="form-control" id="kategori_cerbung" placeholder="Kategori Cerbung" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="keyword">Keyword</label>
                    <input value="{{old('keyword')}}" name="keyword" type="text" class="form-control" id="keyword" placeholder="Keyword" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="/artikel/index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>
@endsection