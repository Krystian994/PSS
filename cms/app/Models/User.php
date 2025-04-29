<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'uzytkownicy';

    public $timestamps = false;

    protected $fillable = [
        'imie', 'nazwisko', 'email', 'haslo', 'rola', 'data_rejestracji'
    ];

    protected $hidden = [
        'haslo',
    ];

    public function getAuthPassword()
    {
        return $this->haslo;
    }

    public function isAdmin()
    {
        return $this->rola === 'admin';
    }

    public function isModerator()
    {
        return $this->rola === 'moderator';
    }

    public function getNameAttribute(): string
    {
        return (string) ($this->imie ?? 'Brak imienia');
    }
}
