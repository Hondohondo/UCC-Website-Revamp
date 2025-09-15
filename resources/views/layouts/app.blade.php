<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'UCC Website')
    </title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    {{-- css reset--}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    {{-- Global css styles--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Partials --}}
    <link rel="stylesheet" href="{{ asset('css/partials/navbar.css') }}">


    {{-- Pages --}}
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">


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

</body>
</html>





