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
