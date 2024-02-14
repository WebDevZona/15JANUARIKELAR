<?php

// app/Http/Controllers/SearchController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PengertianProduk;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        // Lakukan pencarian pada model PengertianProduk
        $results = PengertianProduk::where('isi', 'like', "%$query%")
            ->orWhere('judul', 'like', "%$query%")
            ->orWhere('ket', 'like', "%$query%")
            ->get();

        // Pass the search results and query to the search_results view
        return view('search_results', ['results' => $results, 'query' => $query]);
    }
}
