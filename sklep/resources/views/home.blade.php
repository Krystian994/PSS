@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Sekcja Slideshow -->
        <div class="col-12">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('img/cover-img/C1.jpg') }}" class="d-block w-100" alt="Obraz 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/cover-img/C2.jpg') }}" class="d-block w-100" alt="Obraz 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('img/cover-img/C3.jpg') }}" class="d-block w-100" alt="Obraz 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>

   

        <!-- Kategorie produktów -->
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/cover-img/bg-4.png') }}" class="card-img-top" alt="Wszystkie produkty">
                    <div class="card-body text-center">
                        <a href="{{ url('/listaProduktow') }}" class="btn btn-dark">Wszystkie produkty</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/cover-img/bg-2.png') }}" class="card-img-top" alt="Ubrania">
                    <div class="card-body text-center">
                        <a href="{{ url('/listaProduktow') }}?kategoria=ubrania" class="btn btn-dark">Ubrania</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('img/cover-img/bg-3.png') }}" class="card-img-top" alt="Buty">
                    <div class="card-body text-center">
                        <a href="{{ url('/listaProduktow') }}?kategoria=buty" class="btn btn-dark">Buty</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
