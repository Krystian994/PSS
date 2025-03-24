@extends('layouts.main')

@section('content')
<div class="container mt-5 d-flex justify-content-center">
    <div class="card p-4 shadow-lg" style="width: 400px;">
        <h3 class="text-center">Logowanie</h3>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Hasło:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Zaloguj się</button>
        </form>

        <div class="mt-3 text-center">
            <a href="{{ route('register') }}">Nie masz konta? Zarejestruj się</a>
        </div>
    </div>
</div>
@endsection
