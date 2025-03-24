@extends('layouts.main')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Panel Administratora</h2>

    <h4 class="mt-4">Lista użytkowników:</h4>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>Rola</th>
                <th>Data rejestracji</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->imie }}</td>
                    <td>{{ $user->nazwisko }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <form action="{{ route('zmienRole', $user->id) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <select name="rola" class="form-select" onchange="this.form.submit()">
                                <option value="uzytkownik" {{ $user->rola == 'uzytkownik' ? 'selected' : '' }}>Użytkownik</option>
                                <option value="moderator" {{ $user->rola == 'moderator' ? 'selected' : '' }}>Moderator</option>
                                <option value="admin" {{ $user->rola == 'admin' ? 'selected' : '' }}>Admin</option>
                            </select>
                        </form>
                    </td>
                    <td>{{ $user->data_rejestracji }}</td>
                    <td>
                        @if(auth()->user()->id !== $user->id) {{-- Nie można usunąć siebie --}}
                            <form action="{{ route('usunUzytkownika', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Czy na pewno chcesz usunąć tego użytkownika?')">
                                    Usuń
                                </button>
                            </form>
                        @else
                            <span class="text-muted">Nie możesz usunąć siebie</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
