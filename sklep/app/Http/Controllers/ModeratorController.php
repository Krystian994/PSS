<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produkt;

class ModeratorController extends Controller
{
    public function index()
    {
        $produkty = Produkt::all();
        return view('moderator.panel', compact('produkty'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nazwa' => 'required',
            'kategoria' => 'required',
            'typ' => 'required',
            'rozmiar' => 'required',
            'kolor' => 'required',
            'cena' => 'required|numeric',
            'opis' => 'nullable',
            'ilosc' => 'required|integer',
        ]);

        Produkt::create($request->all());

        return redirect()->route('panelModerator')->with('success', 'Produkt dodany!');
    }

    public function destroy($id)
    {
        $produkt = Produkt::findOrFail($id);
        $produkt->delete();

        return redirect()->route('panelModerator')->with('success', 'Produkt usunięty!');
    }
}
