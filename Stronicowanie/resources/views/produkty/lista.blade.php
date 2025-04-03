@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Lista produktów</h2>

    <!-- Formularz wyszukiwania -->
    <form action="{{ route('listaProduktow') }}" method="GET" class="mb-4 d-flex justify-content-center">
        <input type="text" name="search" class="form-control w-50" placeholder="Szukaj produktu..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-primary ms-2">Szukaj</button>
    </form>

    <div class="d-flex justify-content-center mb-4">
        <a href="{{ route('listaProduktow') }}" class="btn btn-dark mx-2">Wszystkie produkty</a>
        <a href="{{ route('listaProduktow', ['kategoria' => 'ubrania']) }}" class="btn btn-primary mx-2">Ubrania</a>
        <a href="{{ route('listaProduktow', ['kategoria' => 'buty']) }}" class="btn btn-success mx-2">Buty</a>
    </div>
    <div class="row">
        @forelse($produkty as $produkt)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $produkt->nazwa }}</h5>
                        <p class="card-text"><strong>Kategoria:</strong> {{ ucfirst($produkt->kategoria) }}</p>
                        <p class="card-text"><strong>Typ:</strong> {{ $produkt->typ }}</p>
                        <p class="card-text"><strong>Rozmiar:</strong> {{ $produkt->rozmiar }}</p>
                        <p class="card-text"><strong>Kolor:</strong> {{ $produkt->kolor }}</p>
                        <p class="card-text"><strong>Cena:</strong> {{ number_format($produkt->cena, 2) }} zł</p>
                        <p class="card-text"><strong>Opis:</strong> {{ $produkt->opis }}</p>
                        <p class="card-text"><strong>Ilość:</strong> {{ $produkt->ilosc }}</p>

                        <form action="{{ route('koszyk.dodaj', $produkt->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-warning w-100 mt-2">Dodaj do koszyka</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center mt-4">Nie znaleziono produktów.</p>
        @endforelse
    </div>
<!-- Linki do paginacji -->
<div class="d-flex justify-content-center mt-4">
    {{ $produkty->appends(request()->query())->links('pagination::bootstrap-4') }}
</div>
</div>
@endsection