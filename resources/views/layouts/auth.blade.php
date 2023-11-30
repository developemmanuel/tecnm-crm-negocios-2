<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/css/inputs.css')
    @vite('resources/css/fonts.css')
    @livewireStyles
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')

    @livewireScripts
</body>
</html>
