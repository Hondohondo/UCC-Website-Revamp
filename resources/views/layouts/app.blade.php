<!doctype html>
<html lang="en">
<head>

    {{-- Meta --}}
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Title -->
    <title>
        @yield('title', 'UCC Website')
    </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

    {{-- Bootstrap 5.3.8 CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    {{-- Bootstrap icons 1.13.1 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    {{-- css reset--}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    {{-- css for app--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Global css styles--}}
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}">

    {{-- Partials --}}
    <link rel="stylesheet" href="{{ asset('css/partials/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/partials/footer.css') }}">


    {{-- Pages --}}
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">

    {{-- Components --}}
    <link rel="stylesheet" href="{{ asset('css/components/hero.css') }}">


</head>
<body>

{{-- Navbar --}}
@include('partials.navbar')

{{----}}
{{--@include('components.hero');--}}

{{-- Page content --}}
<main>
@yield('content')
</main>

{{-- Footer --}}
@include('partials.footer')

{{-- Bootstrap 5.3.8 JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>





