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
        if ($request->has('search') && !empty($request->search)) {
            $query->where('nazwa', 'LIKE', '%' . $request->search . '%');
        }

        // Filtrowanie po kategorii
        if ($request->has('kategoria') && !empty($request->kategoria)) {
            $query->where('kategoria', $request->kategoria);
        }

        $produkty = $query->get();

        return view('produkty.lista', compact('produkty'));
    }
}
