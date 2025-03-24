<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koszyk extends Model
{
    use HasFactory;

    protected $table = 'koszyk';

    public $timestamps = false; //

    protected $fillable = [
        'uzytkownik_id',
        'produkt_id',
        'ilosc',
    ];

    public function produkt()
    {
        return $this->belongsTo(Produkt::class, 'produkt_id');
    }

    public function uzytkownik()
    {
        return $this->belongsTo(User::class, 'uzytkownik_id');
    }
}
