<?php

// PembelianController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string',
            'jeniskelamin' => 'required|string',
            'email' => 'required|email',
            'nomer' => 'required|string',
            'kampus' => 'required|string',
            'jurusan' => 'required|string',
            'semester' => 'required|string',
        ]);

        // Create a new Pembelian instance and save it to the database
        Pembelian::create($request->all());

        // Redirect or do something else after saving to the database
        return redirect()->route('your.redirect.route');
    }
}
