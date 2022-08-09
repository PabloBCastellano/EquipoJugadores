<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado De Jugadores</title>
</head>
<body>


@foreach ($PlantillaJugadores as $Jugadores )
    <p> {{ $Jugadores->Id_Player }} &nbsp; &nbsp; {{ $Jugadores->Name_Player }} &nbsp; {{ $Jugadores->TShirt_Number }}</p>
@endforeach
</body>
</html>
