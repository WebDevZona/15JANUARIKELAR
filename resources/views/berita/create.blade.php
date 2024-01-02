@extends('layouts.master')

@section('content')

<!-- Pastikan CKEditor script dimuat dengan benar -->


    {{-- <link rel="stylesheet" href="/public/ckeditor/skins/moono-lisa/editor.css"> --}}

<section class="content card" style="padding: 10px 10px 10px 10px ">
    <div class="box">
        <!-- Periksa apakah ada pesan kesalahan JavaScript di konsol -->
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
        <form action="/berita/store" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Tambah Berita </h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="nama">Nama</label>
                    <input value="{{old('nama')}}" name="nama" type="text" class="form-control" id="nama" placeholder="Nama" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="judul">Judul</label>
                    <input value="{{old('judul')}}" name="judul" type="text" class="form-control" id="judul" placeholder="Judul " required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="foto">Foto</label>
                    <input value="{{old('foto')}}" name="foto" type="file" class="form-control" id="foto" placeholder="foto" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="waktu">Waktu</label>
                    <input value="{{old('waktu')}}" name="waktu" type="datetime-local" class="form-control" id="waktu" placeholder="link" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="sumber">Sumber</label>
                    <input value="{{old('sumber')}}" name="sumber" type="text" class="form-control" id="sumber" placeholder="Sumber" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="tampilan">Link</label>
                    <input value="{{old('tampilan')}}" name="tampilan" type="text" class="form-control" id="tampilan" placeholder="Link" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>

<!-- Inisialisasi CKEditor -->
 <!-- <script>
    CKEDITOR.replace('editor1', {
        height: 400, // Mengatur tinggi editor ke 400 piksel
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] }
        ]
    });
</script>  -->

@endsection
