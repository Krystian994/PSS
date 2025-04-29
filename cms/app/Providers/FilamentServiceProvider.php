<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        Filament::serving(function () {
            Filament::registerRenderHook(
                'user.name',
                fn ($user) => (string) ($user->imie ?? 'Brak imienia')
            );
        });
    }
}
