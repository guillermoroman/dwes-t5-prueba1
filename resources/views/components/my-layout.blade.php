<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi título</title>
</head>
<body>
    <nav>
        <a href="{{route('mascotas.index')}}">Lista de mascotas</a>
        <a href="{{route('mascotas.create')}}">Crea una mascota</a>
    </nav>

    {{ $slot }}

    <h2>Y esto es el footer</h2>
</body>
</html>