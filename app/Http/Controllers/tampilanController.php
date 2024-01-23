<?php

namespace App\Http\Controllers;

use App\Video;
use App\Youtube;
use App\Berita;
use App\Artikell;
use App\PengertianProduk;
use App\Produk;
use App\User;
use App\voucher;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Agent\Facades\Agent;


class tampilanController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
    // Mendapatkan data dari model
    $youtube = Youtube::get();
    $data = Video::get();
    $berita = Berita::get();

    // Memeriksa apakah pengguna menggunakan perangkat mobile
    if (Agent::isMobile()) {
        // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
        return view('mobile/indexMobile', compact('data', 'youtube', 'berita'));
    } else {
        // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
        return view('index', compact('data', 'youtube', 'berita'));
    }

    }
=======

        // return view('index');
        // $artikel = Artikell::get();
        $youtube = Youtube::get();
        $data = Video::get();
        $berita = Berita::get();
        return view('index', compact('data', 'youtube', 'berita'));
    }
>>>>>>> 14c2702b2f4d92bd27cf88d3b049805ea5c712e2
    public function ktk()
    {

        return view('Kelas-Tugas-Kuliah');
    }
    public function bmj()
    {

        return view('bimbangan-mata-kuliah-jurusan');
    }
    public function tentang()
    {

        return view('tentang');
    }
    public function bso()
    {
<<<<<<< HEAD
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/bimbingan-skripsi-onlineMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('bimbingan-skripsi-online');
        }
=======

        return view('bimbingan-skripsi-online');
>>>>>>> 14c2702b2f4d92bd27cf88d3b049805ea5c712e2
    }
    public function kpk()
    {

        return view('kelas-persiapan-karir');
    }
    public function kontak()
    {

        return view('kontak');
    }
    public function kti()
    {

        return view('kti');
    }
    public function skripsi()
    {

        return view('skripsi');
    }

    public function artikel()
    {

        return view('artikel');
    }

    public function nonaktif()
    {

        return view('nonaktif');
    }
    public function pembelian()
    {

        return view('pembelian');
    }
    public function checkout(Request $request, $id_produk, $id, $nama_voucher = null, $judulskripsi, $problem, $jurusan)
    {
        dd("Checkpoint");
        $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->get();
        $User = \App\User::where('id', $id)->get();
        $Users = $User->first();
        $Produk = \App\Produk::where('produk', $id_produk)->first();
        $datas = \App\jurusan::get();
        // $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->get();
        $id_pesdik_login = $pengertian->first();

        $Produks = \App\Produk::where('produk', $id_produk)->first();
        $voucher = \App\voucher::get();
        // Ambil nama voucher dari request atau set default ke kosong jika tidak ada
        $namaVoucher = $request->input('nama_voucher', '');

        // Cari voucher berdasarkan nama yang telah diterima
        $voucher = \App\voucher::where('nama', $namaVoucher)->where('publish', 'ya')->first();



        return view('pembayaran', compact('id_produk', 'Users', 'pengertian', 'User', 'datas', 'Produk', 'voucher', 'Produks', 'id_pesdik_login', 'response'));

        // return view('checkout');
    }

    public function okk()
    {
        // return view('auths.login');
        if (auth()->user()) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'Siswa') {
                return redirect()->back()->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiKeuangan') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasAdministrasiSurat') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            } else if (auth()->user()->role == 'PetugasPerpus') {
                return redirect('/dashboard')->with('warning', 'Maaf tindakan anda tidak dibenarkan, tidak usah macem-macem lah !');
            }
        }
        return view('header.blade.php');
    }

    public function pembayaran($id_produk, $id, Request $request)
    {
        $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->get();
        $User = \App\User::where('id', $id)->get();
        $Users = $User->first();
        $Produk = \App\Produk::where('produk', $id_produk)->first();
        $datas = \App\jurusan::get();
        // $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->get();
        $id_pesdik_login = $pengertian->first();

        $Produks = \App\Produk::where('produk', $id_produk)->first();
        $voucher = \App\voucher::get();
        // Ambil nama voucher dari request atau set default ke kosong jika tidak ada
        $namaVoucher = $request->input('nama_voucher', '');

        // Cari voucher berdasarkan nama yang telah diterima
        $voucher = \App\voucher::where('nama', $namaVoucher)->where('publish', 'ya')->first();

        return view('/pembayaran', compact('Users', 'pengertian', 'User', 'datas', 'Produk', 'voucher', 'Produks', 'id_pesdik_login'));
    }

    public function Pengertian($id_produk, Request $request)
    {
        // Ambil data pengertian produk dengan id_produk tertentu
        $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->get();
<<<<<<< HEAD

        // Ambil data user pertama (mungkin Anda ingin mengkondisikan ini sesuai kebutuhan Anda)
        $Users = \App\User::first();

        // Ambil data produk dengan produk tertentu
        $Produk = \App\Produk::where('produk', $id_produk)->first();

        // Ambil data jurusan
        $datas = \App\jurusan::get();

        // Ambil data pertama dari hasil query pengertian produk
        $id_pesdik_login = $pengertian->first();


        // Ambil data produk dengan produk tertentu
        $Produks = \App\Produk::where('produk', $id_produk)->first();

        // Ambil data voucher
        $voucher = \App\voucher::get();

        // Ambil nama voucher dari request atau set default ke kosong jika tidak ada
        $namaVoucher = $request->input('nama_voucher', '');

        // Cari voucher berdasarkan nama yang telah diterima
        $voucher = \App\voucher::where('nama', $namaVoucher)->where('publish', 'ya')->first();

        return view('/pembelian', compact('Users', 'pengertian', 'Users', 'datas', 'Produk', 'voucher', 'Produks', 'id_pesdik_login'));
    }

=======

        // Ambil data user pertama (mungkin Anda ingin mengkondisikan ini sesuai kebutuhan Anda)
        $Users = \App\User::first();

        // Ambil data produk dengan produk tertentu
        $Produk = \App\Produk::where('produk', $id_produk)->first();

        // Ambil data jurusan
        $datas = \App\jurusan::get();

        // Ambil data pertama dari hasil query pengertian produk
        $id_pesdik_login = $pengertian->first();


        // Ambil data produk dengan produk tertentu
        $Produks = \App\Produk::where('produk', $id_produk)->first();

        // Ambil data voucher
        $voucher = \App\voucher::get();

        // Ambil nama voucher dari request atau set default ke kosong jika tidak ada
        $namaVoucher = $request->input('nama_voucher', '');

        // Cari voucher berdasarkan nama yang telah diterima
        $voucher = \App\voucher::where('nama', $namaVoucher)->where('publish', 'ya')->first();

        return view('/pembelian', compact('Users', 'pengertian', 'Users', 'datas', 'Produk', 'voucher', 'Produks', 'id_pesdik_login'));
    }

>>>>>>> 14c2702b2f4d92bd27cf88d3b049805ea5c712e2

    public function validateVoucher(Request $request)
    {
        $voucherCode = $request->input('voucher_code');
        $voucher = voucher::where('nama', $voucherCode)->first();

        if ($voucher) {
            // Jika kode voucher benar, kembalikan respons JSON dengan informasi voucher
            return response()->json(['message' => 'Kode voucher valid.', 'voucher' => $voucher]);
        } else {
            // Jika kode voucher salah, kembalikan respons JSON dengan pesan kesalahan
            return response()->json(['message' => 'Kode voucher tidak valid.']);
        }
    }
}
