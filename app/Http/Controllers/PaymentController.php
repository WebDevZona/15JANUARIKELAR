<?php

namespace App\Http\Controllers;

use App\Produk;
use Closure;
use App\Payment;
use Illuminate\Http\Request;
use Midtrans\Config;
use Jenssegers\Agent\Agent;

class PaymentController extends Controller
{
    public function submitPayment(Request $request)
    {

        // Validation (add more as needed)
        $request->validate([
            'name' => 'required|string',
            'jeniskelamin' => 'required|in:laki-laki,perempuan',
            'email' => 'required|email',
            'nomer' => 'required|string',
            'kampus' => 'required|string',
            'id_jurusan' => 'required|string',
            'semester' => 'required|string',
        ]);

        // Save the form data to the 'payments' table
        $payment = Payment::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'jeniskelamin' => $request->jeniskelamin,
            'email' => $request->email,
            'nomer' => $request->nomer,
            'kampus' => $request->kampus,
            'id_jurusan' => $request->id_jurusan,
            'semester' => $request->semester,
            // Add other fields as needed
        ]);

        // Store payment ID in the session
        $request->session()->put('idpayment', $payment->id);

        $productIds = Produk::pluck('id');
        $products = Produk::whereIn('id', $productIds)->get();

        return view('bukti', ['idpayment' => $payment->id, 'products' => $products]);

        // $productIds = Produk::pluck('id');
        // return view('bukti', ['idpayment' => $payment->id, 'productIds' => $productIds]);
        // Return view with the payment ID
        // return view('bukti', ['idpayment' => $payment->id], 'productIds');
    }

    public function foto(Request $request)
    {
        $request->validate([
            // 'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'foto' => 'required|image|max:2048',

        ]);

        $image = $request->file('foto');
        $nama_image = time() . '_' . $image->getClientOriginalName(); // Add timestamp to avoid filename conflicts
        $image->move('foto_upload', $nama_image);

        // Retrieve ID payment from the session
        $idpayment = $request->session()->get('idpayment');

        // Update data using payment ID
        Payment::where('id', $idpayment)->update(['foto' => $nama_image]);

        // Remove ID payment from the session (optional)
        $request->session()->forget('idpayment');

        // Redirect with success message or any other logic
        return redirect()->route('mima')->with('success', 'Foto berhasil diunggah');
    }
    public function mima()
    {
        // Your 'mima' logic goes here
        return view('mima');
    }

    // public function handle($request, Closure $next)
    // {
    //     if (auth()->user() && auth()->user()->hasRole('user')) {
    //         return $next($request);
    //     }

    //     return redirect('/');  // Make sure this redirection makes sense
    // }
}
