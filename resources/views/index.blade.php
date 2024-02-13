<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    @include('home.navbar')
    @include('home.banner')
    @include('home.ponentes')
    @include('home.caledar')
    @include('home.footer')
</body>
</html>
