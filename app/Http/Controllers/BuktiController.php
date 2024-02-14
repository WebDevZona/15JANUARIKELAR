<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuktiController extends Controller
{
    public function checkPaymentStatus($id)
    {
        $payment = Payment::where('user_id', $id)->first();

        if ($payment && $payment->foto) {
            // User has uploaded payment proof
            // You can perform any additional logic here if needed
            return redirect()->route('mima')->with('success', 'Payment proof has been uploaded.');
        } else {
            // User has not uploaded payment proof
            return redirect()->route('submit.payment')->with('info', 'Please upload payment proof.');
        }
    }

    public function foto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('foto');
        $nama_image = time() . '_' . $image->getClientOriginalName(); // Add timestamp to avoid filename conflicts
        $image->move('foto_upload', $nama_image);

        Payment::create([
            'user_id' => auth()->id(), // Assuming user_id is used to associate the payment with a user
            'foto' => $nama_image,
            // Add other fields as needed
        ]);

        // Redirect with success message or any other logic
        return redirect()->route('mima')->with('success', 'Payment proof has been uploaded.');
    }

    public function mima()
    {
        // Your 'mima' logic goes here
        return view('mima');
    }

    public function showBuktiPage($id)
    {
        // Logika untuk mengambil data pembayaran berdasarkan $id
        $payment = Payment::find($id);

        // Pastikan data ditemukan
        if (!$payment) {
            abort(404); // Tampilkan halaman 404 jika data tidak ditemukan
        }

        // Lebih baik mengecek apakah foto sudah diunggah atau belum
        $fotoUploaded = !empty($payment->foto);

        // Ambil data produk (contoh: ambil semua produk)
        $products = Produk::all();
        // Contoh mengirim data ke view
        return view('bukti', ['payment' => $payment, 'token_transaksi' => $payment->token_transaksi, 'harga' => $payment->harga, 'products' => $products, 'fotoUploaded' => $fotoUploaded]);
    }
}
