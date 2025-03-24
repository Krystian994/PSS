@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Panel Moderatora</h2>

    <h4>Dodaj nowy produkt:</h4>
    <form action="{{ route('dodajProdukt') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Nazwa:</label>
            <input type="text" name="nazwa" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kategoria:</label>
            <select name="kategoria" class="form-control">
                <option value="ubrania">Ubrania</option>
                <option value="buty">Buty</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Typ:</label>
            <input type="text" name="typ" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Rozmiar:</label>
            <input type="text" name="rozmiar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Kolor:</label>
            <input type="text" name="kolor" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Cena:</label>
            <input type="number" step="0.01" name="cena" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Opis:</label>
            <textarea name="opis" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label>Ilość:</label>
            <input type="number" name="ilosc" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Dodaj produkt</button>
    </form>

    <h4 class="mt-4">Lista produktów:</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Kategoria</th>
                <th>Typ</th>
                <th>Cena</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produkty as $produkt)
                <tr>
                    <td>{{ $produkt->nazwa }}</td>
                    <td>{{ ucfirst($produkt->kategoria) }}</td>
                    <td>{{ $produkt->typ }}</td>
                    <td>{{ $produkt->cena }} zł</td>
                    <td>
                        <form action="{{ route('usunProdukt', $produkt->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
