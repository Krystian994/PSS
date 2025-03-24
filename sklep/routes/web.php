<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ProduktController;
use App\Http\Controllers\ModeratorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KoszykController;

Route::get('/listaProduktow', [ProduktController::class, 'index'])->name('listaProduktow');

Route::middleware(['auth'])->group(function () {
    Route::get('/koszyk', [KoszykController::class, 'index'])->name('koszyk');
    Route::post('/koszyk/dodaj/{id}', [KoszykController::class, 'dodajDoKoszyka'])->name('koszyk.dodaj');
    Route::delete('/koszyk/usun/{id}', [KoszykController::class, 'usunZKoszyka'])->name('koszyk.usun');
    Route::post('/koszyk/zamow', [KoszykController::class, 'zamow'])->name('koszyk.zamow');
});


Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/panel-admina', [AdminController::class, 'index'])->name('panelAdmin');
    Route::patch('/zmien-role/{id}', [AdminController::class, 'zmienRole'])->name('zmienRole');
    Route::delete('/usun-uzytkownika/{id}', [AdminController::class, 'destroy'])->name('usunUzytkownika');
});



Route::get('/logowanie', [LoginController::class, 'showLogin'])->name('login');
Route::post('/logowanie', [LoginController::class, 'login']);

Route::get('/registerShow', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/registerShow', [RegisterController::class, 'register']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/listaProduktow', [ProduktController::class, 'index'])->name('listaProduktow');



Route::middleware(['auth', 'moderator'])->group(function () {
    Route::get('/panel-moderatora', [ModeratorController::class, 'index'])->name('panelModerator');
    Route::post('/dodaj-produkt', [ModeratorController::class, 'store'])->name('dodajProdukt');
    Route::delete('/usun-produkt/{id}', [ModeratorController::class, 'destroy'])->name('usunProdukt');
});



Route::get('/', function () {
    return view('home');
});
