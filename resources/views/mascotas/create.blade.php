<x-app-layout>
    <x-slot name="header">
        Crea una mascota
    </x-slot>


                    <form action="{{route('mascotas.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required>
                        <br><br>

                        <label for="especie">Especie:</label>
                        <input type="text" id="especie" name="especie" required>
                        <br><br>

                        <label for="descripcion">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" required>
                        <br><br>

                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
                        <br><br>

                        <label for="foto">Foto:</label>
                        <input type="file" id="foto" name="foto">
                        <br><br>

                        <button type="submit">Guardar Mascota</button>

                    </form>
</x-app-layout>


