<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('header-title','GameStop')</title>
</head>
<body>
    @include('partials.header')

    <main class="bg-dark">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>