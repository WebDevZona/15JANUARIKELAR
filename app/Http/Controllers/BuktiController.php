<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BuktiController extends Controller
{
    public function foto(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('foto');
        $nama_image = time() . '_' . $image->getClientOriginalName(); // Add timestamp to avoid filename conflicts
        $image->move('foto_upload', $nama_image);

        Payment::create([
            'foto' => $nama_image,
            // Add other fields as needed
        ]);

        // Redirect with success message or any other logic
        return redirect()->route('mima')->with('success', 'Foto berhasil diunggah');
    }

    public function mima()
    {
        // Your 'mima' logic goes here
        return view('mima');
    }
}
