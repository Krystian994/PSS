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

@push('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {

    function loadProducts(url) {
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('#produkty-wrapper').html(data);
                window.history.pushState({}, '', url);
            },
            error: function() {
                alert('Wystąpił błąd podczas ładowania produktów.');
            }
        });
    }

    // Kliknięcie linku paginacji
    $(document).on('click', '.pagination a', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        loadProducts(url);
    });

    // Kliknięcie w filtry kategorii (tylko <a>, nie buttony!)
    $(document).on('click', 'a.btn-primary, a.btn-dark, a.btn-success', function(event) {
        event.preventDefault();
        var url = $(this).attr('href');
        loadProducts(url);
    });

    // Wysłanie formularza wyszukiwania
    $('#search-form').on('submit', function(event) {
        event.preventDefault();
        var url = $(this).attr('action') + '?' + $(this).serialize();
        loadProducts(url);
    });

});
</script>
@endpush
