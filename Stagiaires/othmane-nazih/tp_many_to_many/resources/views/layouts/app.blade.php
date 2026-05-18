<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Shop')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1><a href="{{ route('categories.index') }}">Shop</a></h1>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
