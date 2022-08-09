<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
    crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <title>Equipos Actuales</title>
</head>
<body>
    <form  method="post">
        @csrf
        <table class=" table table-bordered border-secondary">
            <thead>
            <tr>
                <th scope="col">Seleccionar</th>
                <th scope="col">Nombre Equipo</th>
                <th scope="col">Nombre Jugador</th>

            </tr>
            </thead>
            <tbody>

                @foreach ($EquiposActuales as $Equipo )
                <tr>
                    <th scope="row"><input type="checkbox" name="Elegir[]" value="{{ $Equipo->Id_Team }} "/>{{ $Equipo->Id_Team }}</th>
                    <td> <input type="text" name="NameTeam" value="{{ $Equipo->Name_Team }}"/></td>
                    <td><input type="text" name="NamePlayer" value="{{ $Equipo->Name_Player }}" /></td>
                </tr>
                @endforeach
                </tbody>
        </table>
        <input type="submit" name="BorrarEquipo" href="{{ route('BorrarEquipo') }}"value="Borrar Equipo"/>
    </form>
</body>
</html>
