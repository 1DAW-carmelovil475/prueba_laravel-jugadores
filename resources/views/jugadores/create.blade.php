<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Añadir Jugadores</h1>

    <form action="{{ route('jugadores.store') }}" method="post">
        @csrf
        <label>Nombre</label>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label>Posición</label>
        <select name="posicion" id="posicion">
            <option value="portero">Portero</option>
            <option value="defensa">Defensa</option>
            <option value="mediocentro">Mediocentro</option>
            <option value="delantero">Delantero</option>
        </select><br><br>

        <label>Dorsal</label>
        <input type="number" name="dorsal" id="dorsal"><br><br>

        <button type="submit">Guardar</button>

    </form>
    <br><br>
    <a href="{{ route('jugadores.index') }}" style="color: black">Volver al índice</a>
    @if ($errors->any())
        <ul style="color: red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>