<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkt extends Model
{
    use HasFactory;

    protected $table = 'produkty';

    public $timestamps = false; 

    protected $fillable = [
        'nazwa', 'kategoria', 'typ', 'rozmiar', 'kolor', 'cena', 'opis', 'ilosc'
    ];
}
