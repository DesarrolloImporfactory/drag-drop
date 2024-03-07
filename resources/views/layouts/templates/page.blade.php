<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
    <main>
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>