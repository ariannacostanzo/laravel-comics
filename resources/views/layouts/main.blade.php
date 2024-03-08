<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics | @yield('title')</title>
    <link rel="icon" href="{{Vite::asset('resources/img/favicon.ico')}}" >
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>
    {{-- header --}}
    @include('includes.header')
    {{-- header --}}

    {{-- jumbotron --}}
    <figure id="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
    </figure>
     {{-- jumbotron --}}

     {{-- main --}}
     @yield('main-content')
     {{-- main --}}

    {{-- bonus --}}
    @include('includes.bonus')
    {{-- bonus --}}

    {{-- footer --}}
    @include('includes.footer')
    {{-- footer --}}

</body>
</html>