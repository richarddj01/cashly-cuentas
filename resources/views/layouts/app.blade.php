<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="navbar navbar-expand-sm bg-primary navbar-dark">

            <a class="navbar-brand" href="/">Logo</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Cuentas</a>
                    </li>
                </ul>
            </div>
        </div>

        @yield('content')

        <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    </body>
</html>
