<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkt;

class ProduktController extends Controller
{
    public function index(Request $request)
    {
        $query = Produkt::query();

        // Wyszukiwanie po nazwie
        if ($request->filled('search')) {
            $query->where('nazwa', 'LIKE', '%' . $request->search . '%');
        }

        // Filtrowanie po kategorii
        if ($request->filled('kategoria')) {
            $query->where('kategoria', $request->kategoria);
        }

        // Stronicowanie (6 produktów na stronę)
        $produkty = $query->paginate(6)->appends($request->query());

        return view('produkty.lista', compact('produkty'));
    }
}