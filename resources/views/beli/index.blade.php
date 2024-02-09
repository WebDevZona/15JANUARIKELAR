@extends('layouts.master')
@section('content')
<section class="content card" style="padding: 10px 10px 20px 20px  ">
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
        <div class="row">
            <div class="col">
                <h4><i class="nav-icon fas fa-child my-0 btn-sm-1"></i> Data Pembeli</h3>
                    <hr>
            </div>
        </div>
        <div>
            {{-- <div class="col">
                <a class="btn btn-primary btn-sm my-1 mr-sm-1" href="create" role="button"><i class="fas fa-plus"></i> Tambah Data</a>
                <br>
            </div> --}}
        </div>
        <div class="row">
            <div class="row table-responsive">
                <div class="col-12">
                    <table class="table table-hover table-head-fixed" id='tabelAgendaMasuk'>
                        <thead>
                            <tr class="bg-light">
                                <th>
                                    <div style="width:110px;">No.</td>
                                </th>
                                <th>
                                    <div style="width:110px;">Nama</td>
                                </th>
                                <th>
                                    <div style="width:110px;">Jenis Kelamin</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Email</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Nomer HP</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Kampus</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Jurusan</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Semester</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Foto Bukti Pembayaran</div>
                                </th>
                                <th>
                                    <div style="width:110px;">ID Transaksi</div>
                                </th>
                                <th>
                                    <div style="width:110px;">Aksi</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0; ?>
                            @foreach($datas as $beli)
                            <?php $no++; ?>
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$beli->name}}</td>
                                <td>{{$beli->jeniskelamin}}</td>
                                <td>{{$beli->email}}</td>
                                <td>{{$beli->nomer}}</td>
                                <td>{{$beli->kampus}}</td>
                                <td>{{$beli->id_jurusan}}</td>
                                <td>{{$beli->semester}}</td>
                                <td>
                                    @if($beli->foto)
                                    {{-- @if( in_array(pathinfo($beli->foto, PATHINFO_EXTENSION), ['png', 'jpg', 'JPEG'])) --}}
                                    <img src="{{ asset('foto_upload/'.$beli->foto) }}" alt="" title="" style="height: 100px;width:150px;">
                                    @else
                                    <p>Tidak ada foto profil.</p>
                                    @endif
                                </td>
                                <td>{{$beli->token_transaksi}}</td>
                                <td>
                                    <!-- <a href="{{ route('beli.edit', $beli->id) }}" class="btn btn-warning">Edit</a> -->
                                    <form action="{{ route('beli.destroy', $beli->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                        @if(session('sukses'))
                                        <div class="alert alert-success">{{ session('sukses') }}</div>
                                        @endif

                                    </form>
                                </td>
                                <!-- <td>{{$beli->harga - $beli->harga * $beli->voucher/100}}</td> -->
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection