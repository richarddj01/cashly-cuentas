<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | {{  config('app.name', 'Cashly') }} </title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container-fluid">

                <a class="navbar-brand" href="/">Logo</a>

                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarPrincipal"
                    aria-controls="navbarPrincipal"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarPrincipal">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Inicio</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('cuentas.index') }}" class="nav-link">
                                Cuentas
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('categoria_movimientos.index') }}" class="nav-link">
                                Categorías
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    </body>
</html>
