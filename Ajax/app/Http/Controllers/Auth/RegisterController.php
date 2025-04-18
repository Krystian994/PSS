<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Walidacja danych
        $data = $request->validate([
            'imie' => 'required|string|max:255',
            'nazwisko' => 'required|string|max:255',
            'email' => 'required|email|unique:uzytkownicy',
            'haslo' => 'required|min:6|confirmed',
        ]);

        //Ustaw domyślną rolę użytkownika
        $data['rola']='uzytkownik';

        // Tworzenie użytkownika
        $user = User::create([
            'imie' => $data['imie'],
            'nazwisko' => $data['nazwisko'],
            'email' => $data['email'],
            'haslo' => Hash::make($data['haslo']), // Hashowanie hasła
            'rola' => $data['rola'], 
            'data_rejestracji' => Carbon::now(), // Aktualna data
        ]);

        // Automatyczne logowanie użytkownika po rejestracji
        Auth::login($user);

        // Przekierowanie na stronę główną z komunikatem sukcesu
        return redirect('/')->with('success', 'Rejestracja zakończona sukcesem! Witaj w Glance!');
    }
}

