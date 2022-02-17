<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ getTitle($title ?? '') }} </title>
    <!-- Fonts -->
    <link style="text/css" rel="stylesheet" href="/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('lineAwesome/css/line-awesome.css') }}">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" ></script> --}}


</head>

<body class="antialiased">
    @include('laramap._nav')
    <main class="" role="main">
        @yield('content')
    </main>

    <footer class="mtf-5">
        <p class="text-center">Copyright{{-- &copy; --}} {{ date('Y') }} &middot; Laramap by <a
                href="https://twitter/@ablack237">@ablack237</a> &dash; A <a href="https://www.laramap.com">laramap</a>
            clone app &middot; {{-- |Allrightsreserved --}} </p>
        <p class="text-center"><strong>This app has bluilt for leaning purposes.</strong></p>
    </footer>
    @stack('js')
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" ></script> --}}
    <script src='{{ asset('bootstrap/js/bootstrap.js') }}'></script>
    <script src="{{ asset('js/jquery.js') }}"></script>

    @include('flashy::message')
</body>

</html>
