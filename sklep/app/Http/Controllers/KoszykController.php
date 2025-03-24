<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Koszyk;
use App\Models\Produkt;

class KoszykController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Wymusza logowanie dla wszystkich metod
    }

    public function index()
    {
        $koszyk = Koszyk::where('uzytkownik_id', Auth::id())->with('produkt')->get();
        return view('koszyk.index', compact('koszyk'));
    }

    public function dodajDoKoszyka(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/logowanie')->with('error', 'Musisz być zalogowany, aby dodać produkt do koszyka.');
        }

        $produkt = Produkt::findOrFail($id);

        $koszyk = Koszyk::where('uzytkownik_id', Auth::id())->where('produkt_id', $id)->first();

        if ($koszyk) {
            $koszyk->ilosc += 1;
            $koszyk->save();
        } else {
            Koszyk::create([
                'uzytkownik_id' => Auth::id(),
                'produkt_id' => $id,
                'ilosc' => 1,
            ]);
        }

        return redirect()->route('koszyk')->with('success', 'Produkt dodany do koszyka!');
    }

    public function usunZKoszyka($id)
    {
        $koszyk = Koszyk::findOrFail($id);
        if ($koszyk->uzytkownik_id === Auth::id()) {
            $koszyk->delete();
        }
        return redirect()->route('koszyk')->with('success', 'Produkt usunięty z koszyka!');
    }

    public function zamow()
    {
        Koszyk::where('uzytkownik_id', Auth::id())->delete();
        return redirect()->route('koszyk')->with('success', 'Zamówienie złożone!');
    }
}
