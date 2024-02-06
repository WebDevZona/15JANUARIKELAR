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
    public function ktk()
    {
        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/Kelas-Tugas-KuliahMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('Kelas-Tugas-Kuliah');
        }
    }
    public function bmj()
    {

        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/bimbangan-mata-kuliah-jurusanMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('bimbangan-mata-kuliah-jurusan');
        }
    }
    public function tentang()
    {
        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/tentangMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('tentang');
        }
    }
    public function bso()
    {
        // $datas = Produk::get();
            $productIds = Produk::pluck('id');

        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/bimbingan-skripsi-onlineMobile',  compact('productIds'));
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('bimbingan-skripsi-online',  compact('productIds'));
        }
    }
    public function kpk()
    {
        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/kelas-persiapan-karirMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('kelas-persiapan-karir');
        }
    }
    public function kontak()
    {
        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/kontakMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('kontak');
        }
    }
    public function kti()
    {
        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/ktiMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('kti');
        }
    }
    public function skripsi()
    {
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/skripsiMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('skripsi');
        }
    }

    public function artikel()
    {

        return view('artikel');
    }

    public function nonaktif()
    {
        // Memeriksa apakah pengguna menggunakan perangkat mobile
        if (Agent::isMobile()) {
            // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
            return view('mobile/nonaktifMobile');
        } else {
            // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
            return view('nonaktif');
        }
    }
   public function pembelian()
{
    // Memeriksa apakah pengguna menggunakan perangkat mobile
    if (Agent::isMobile()) {
        // Jika pengguna menggunakan perangkat mobile, tampilkan tampilan mobile
        return view('mobile/pembelianMobile');
    } else {
        // Jika pengguna menggunakan perangkat desktop, tampilkan tampilan desktop
        return view('pembelian');
    }
}

public function checkout(Request $request, $id_produk, $id, $nama_voucher = null, $judulskripsi, $problem, $jurusan)
{
    // Menggunakan first() langsung pada query untuk mendapatkan objek tunggal
    $pengertian = \App\PengertianProduk::where('id_produk', $id_produk)->first();
    $User = \App\User::where('id', $id)->first();
    $Users = $User;
    $Produk = \App\Produk::where('produk', $id_produk)->first();
    $datas = \App\jurusan::get();
    $id_pesdik_login = $pengertian; // Menghilangkan first() karena sudah digunakan pada query
    $Produks = \App\Produk::where('produk', $id_produk)->first();
    $voucher = \App\voucher::get();
    
    // Ambil nama voucher dari request atau set default ke kosong jika tidak ada
    $namaVoucher = $request->input('nama_voucher', '');

    // Cari voucher berdasarkan nama yang telah diterima
    $voucher = \App\voucher::where('nama', $namaVoucher)->where('publish', 'ya')->first();

    return view('pembayaran', compact('id_produk', 'Users', 'pengertian', 'User', 'datas', 'Produk', 'voucher', 'Produks', 'id_pesdik_login', 'response'));
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
