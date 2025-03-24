@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Twój Koszyk</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($koszyk->isEmpty())
        <p class="text-center mt-4">Twój koszyk jest pusty.</p>
    @else
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Produkt</th>
                    <th>Cena</th>
                    <th>Ilość</th>
                    <th>Łączna Cena</th>
                    <th>Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach($koszyk as $item)
                    <tr>
                        <td>{{ $item->produkt->nazwa }}</td>
                        <td>{{ number_format($item->produkt->cena, 2) }} zł</td>
                        <td>{{ $item->ilosc }}</td>
                        <td>{{ number_format($item->produkt->cena * $item->ilosc, 2) }} zł</td>
                        <td>
                            <form action="{{ route('koszyk.usun', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form action="{{ route('koszyk.zamow') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success">Złóż zamówienie</button>
        </form>
    @endif
</div>
@endsection
