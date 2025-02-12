<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Mascota</title>
</head>
<body>
    <h1>Editar Mascota</h1>

    <form action="{{route('mascotas.update', $mascota->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $mascota->nombre }}" required>
        <br><br>

        <label for="especie">Especie:</label>
        <input type="text" id="especie" name="especie" value="{{ $mascota->especie }}"required>
        <br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" value="{{ $mascota->descripcion }}"required>
        <br><br>

        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" value="{{ $mascota->fecha_nacimiento }}">
        <br><br>

        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto">
        <br><br>

        <button type="submit">Guardar Mascota</button>
    
    </form>

    <a href= "{{ route ('mascotas.index') }}">Volver al listado</a>

    
</body>
</html>