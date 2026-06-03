<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Jugador</h1>

    <form action="{{ route('jugadores.update', $jugador) }}" method="post">
        @csrf
        @method('PUT')
        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $jugador->nombre }}">
        <br><br>

        <label>Posicion</label>
        <select name="posicion">
            <option value="portero" {{ $jugador->posicion == 'portero' ? 'selected' : '' }}>Portero</option>
            <option value="defensa" {{ $jugador->posicion == 'defensa' ? 'selected' : '' }}>Defensa</option>
            <option value="mediocentro" {{ $jugador->posicion == 'mediocentro' ? 'selected' : '' }}>Mediocentro</option>
            <option value="delantero" {{ $jugador->posicion == 'delantero'  ? 'selected' : '' }}>Delantero</option>
        </select><br><br>

        <label>Dorsal</label>
        <input type="number" name="dorsal" value="{{ $jugador->dorsal }}"><br><br>
        
        <button type="submit">Guardar cambios</button>

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