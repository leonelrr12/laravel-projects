<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Hrodced')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('/js/app.js') }}" defer></script>

</head>
<body>
    <div id="app" class="h-screen d-flex flex-column justify-content-between" >
        <header>
            @include('partials.nav')
            @include('partials.session-status')
        </header>
        
        <main class="py-3">
            @yield('content')
        </main>
        
        <footer class="bg-white text-center text-black-50 py-2 shadow">
            {{ config('app.name') }} | Copyright &copy; {{ date('Y') }}
        </footer>
    </div>
</body>
</html>