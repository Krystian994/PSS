@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Lista produktów</h2>

    <!-- Formularz wyszukiwania -->
    <form id="search-form" action="{{ route('listaProduktow') }}" method="GET" class="mb-4 d-flex justify-content-center">
        <input type="text" name="search" class="form-control w-50" placeholder="Szukaj produktu..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary ms-2">Szukaj</button>
    </form>

    <!-- Filtry kategorii -->
    <div class="d-flex justify-content-center mb-4">
        <a href="{{ route('listaProduktow') }}" class="btn btn-dark mx-2">Wszystkie produkty</a>
        <a href="{{ route('listaProduktow', ['kategoria' => 'ubrania']) }}" class="btn btn-primary mx-2">Ubrania</a>
        <a href="{{ route('listaProduktow', ['kategoria' => 'buty']) }}" class="btn btn-success mx-2">Buty</a>
    </div>

    <!-- Lista produktów -->
    <div id="produkty-wrapper">
        @include('produkty.partials.lista-produktow')
    </div>

</div>
@endsection

