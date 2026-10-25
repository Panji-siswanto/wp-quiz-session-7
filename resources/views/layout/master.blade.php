<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- Bootstrap Local (Offline from public/css/) --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    
    {{--Bootstrap--}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css"> --}}

    {{-- vite --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>
<body class="d-flex flex-column min-vh-100 bg-white">

    {{--Navbar--}}
    @include('layout.navbar')

    {{--Main Content--}}
    <main class="container my-5">
        @yield('content')
    </main>

    {{--Footer--}}
    @include('layout.footer')

    {{--JS Bundle--}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"></script> --}}

    {{-- JS Bundle Local (Offline from public/js/) --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
