<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glance</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Pasek nawigacyjny -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold fs-3 text-light" href="{{ url('/') }}">
                Glance
            </a>

            <div class="d-flex align-items-center">
                @auth
                    @if(Auth::user()->rola === 'admin')
                        <a href="{{ route('panelAdmin') }}" class="btn btn-warning me-3">Panel Admina</a>
                    @elseif(Auth::user()->rola === 'moderator')
                        <a href="{{ route('panelModerator') }}" class="btn btn-primary me-3">Panel Moderatora</a>
                    @endif

                    <!-- Przycisk Koszyk -->
                    <a href="{{ route('koszyk') }}" class="btn btn-success me-3">
                        Koszyk 🛒
                    </a>

                    <span class="text-light me-3">Witaj, {{ Auth::user()->imie }}!</span>
                    <a href="{{ url('/logout') }}" class="btn btn-outline-light">Wyloguj się</a>
                @else
                    <a href="{{ url('/logowanie') }}" class="btn btn-outline-primary me-2">Zaloguj się</a>
                    <a href="{{ url('/registerShow') }}" class="btn btn-outline-success">Zarejestruj się</a>
                @endauth
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
