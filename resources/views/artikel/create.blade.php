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
        <form action="/artikel/store" method="POST" enctype="multipart/form-data">
            <h4><i class="nav-icon fas fa-child my-1 btn-sm-1"></i> Tambah Artikel </h4>
            <hr>
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-6">
                    <label for="tagline_artikel">Tagline Artikel</label>
                    <input value="{{old('tagline_artikel')}}" name="tagline_artikel" type="text" class="form-control" id="tagline_artikel" placeholder="Tagline Artikel" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="judul_artikel">Judul Artikel</label>
                    <input value="{{old('judul_artikel')}}" name="judul_artikel" type="text" class="form-control" id="judul_artikel" placeholder="Judul Artikel" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <!-- Tambahkan textarea untuk CKEditor -->
                    <label for="isi_artikel">Isi Artikel</label>
                    <!-- <p>centang hijau bisa copy disini ✅</p> -->
                    <textarea name="isi_artikel" id="isi"required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">{{old('isi_artikel')}}</textarea>

                    <label for="date_artikel">Tanggal Artikel</label>
                    <input value="{{old('date_artikel')}}" name="date_artikel" type="datetime-local" class="form-control" id="date_artikel" placeholder="link" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="dokumentasi_artikel">Dokumentasi Artikel</label>
                    <input value="{{old('dokumentasi_artikel')}}" name="dokumentasi_artikel" type="text" class="form-control" id="dokumentasi_artikel" placeholder="Dokumentasi Artikel" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    

                    <label for="dokumentasi_compress">Dokumentasi Compress</label>
                    <input value="{{old('dokumentasi_compress')}}" name="dokumentasi_compress" type="text" class="form-control" id="dokumentasi_compress" placeholder="Dokumentasi Compress" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    

                    <label for="slug_artikel">Slug Artikel</label>
                    <input value="{{old('slug_artikel')}}" name="slug_artikel" type="text" class="form-control" id="slug_artikel" placeholder="Slug Artikel" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                    

                    <label for="visible_artikel">Visible Artikel</label>
                    <input value="{{old('visible_artikel')}}" name="visible_artikel" type="text" class="form-control" id="visible_artikel" placeholder="Visible Artikel" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="jumlah_share">Jumlah Share</label>
                    <input value="{{old('jumlah_share')}}" name="jumlah_share" type="number" class="form-control" id="jumlah_share" placeholder="Jumlah Share" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">


                    <label for="total_view">Total View</label>
                    <input value="{{old('total_view')}}" name="total_view" type="number" class="form-control" id="total_view" placeholder="Total View" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">

                    <label for="id_author">Id Author</label>
                    <input value="{{old('id_author')}}" name="id_author" type="number" class="form-control" id="id_author" placeholder="Id Author" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">


                    <label for="pilihan_editor">Pilihan Editor</label>
                    <input value="{{old('pilihan_editor')}}" name="pilihan_editor" type="number" class="form-control" id="pilihan_editor" placeholder="Pilihan Editor" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">


                    <label for="kategori_cerbung">Kategori Cerbung</label>
                    <input value="{{old('kategori_cerbung')}}" name="kategori_cerbung" type="text" class="form-control" id="kategori_cerbung" placeholder="Kategori Cerbung" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">


                    <label for="keyword">Keyword</label>
                    <input value="{{old('keyword')}}" name="keyword" type="text" class="form-control" id="keyword" placeholder="Keyword" required oninvalid="this.setCustomValidity('Isian ini tidak boleh kosong !')" oninput="setCustomValidity('')">
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> SIMPAN</button>
            <a class="btn btn-danger btn-sm" href="index" role="button"><i class="fas fa-undo"></i> BATAL</a>
        </form>
    </div>
</section>

<!-- Inisialisasi CKEditor -->
 <script>
    CKEDITOR.replace('editor1', {
        height: 400, // Mengatur tinggi editor ke 400 piksel
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', 'Strike'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Blockquote'] }
        ]
    });
</script> 

@endsection