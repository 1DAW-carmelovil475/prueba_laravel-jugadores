<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jugadores</title>
</head>
<body>
    <h1>Lista de Jugadores</h1>

    <a href="{{ route('jugadores.create') }}" style="color: black" >Añadir Jugador</a>
    <br>
    <br>
    <table border="1">

        <thead style="color: blueviolet">
            <tr>
                <th>Nombre</th>
                <th>Posición</th>
                <th>Dorsal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody style="color: rgb(4, 44, 31)">
            @foreach ($jugadores as $jugador)
                <tr>
                    <th>{{ $jugador->nombre }}</th>
                    <th>{{ $jugador->posicion }}</th>
                    <th>{{ $jugador->dorsal }}</th>
                    <th>
                        <form method="GET" action="{{ route('jugadores.edit', $jugador) }}">
                            <button type="submit">Editar</button>
                        </form>
                        <form method="POST" action="{{ route('jugadores.destroy', $jugador) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('¿Seguro de que quiere eliminar este jugador?')">Eliminar</button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>



    </table>

</body>
</html>