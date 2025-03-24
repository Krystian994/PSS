@extends('layouts.main')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center">Rejestracja</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Imię:</label>
                <input type="text" name="imie" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Nazwisko:</label>
                <input type="text" name="nazwisko" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Hasło:</label>
                <input type="password" name="haslo" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Potwierdź hasło:</label>
                <input type="password" name="haslo_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Zarejestruj się</button>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ route('login') }}">Masz już konto? Zaloguj się</a>
        </div>
    </div>
</div>
@endsection
