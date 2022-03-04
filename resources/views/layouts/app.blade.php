<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'valore default')</title>
    @yield('header-scripts')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <h1>Lista Film</h1>

    <main>
        @yield('content')
    </main>

    
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
</body>
</html>