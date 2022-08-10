<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="{{ asset('../resources/js/Operaciones.js') }} " defer></script>
    <title>Añadir Jugador A Equipo</title>
</head>
<body>
    <form  method="POST">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Nombre del Equipo</label>
          <select name="Equipos">
            @foreach ($Equip as $Equipos )
                <option value="{{ $Equipos->Id_Team }}"> {{ $Equipos->Name_Team }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
            <label  class="form-label">Nombre del Jugador</label>
            <select name="Jugadores">
              @foreach ($Jug as $Jugadores )
                  <option value="{{ $Jugadores->Id_Player }}"> {{ $Jugadores->Name_Player }}</option>
              @endforeach
            </select>
          </div>
        <div class="mb-3 position-relative" id="Enviar">
            <button type="submit"  href="{{ route('EquipoJugador') }}" class="position-absolute  top-100 start-50 translate-middle btn btn-primary" style="margin-top:2rem;">Dar de Alta al Equipo</button>

        </div>
      </form>
      <a    href="{{ url('/ ') }}" class="position-absolute  translate-middle btn btn-primary "style="margin-left:60rem;margin-top:2rem;">Panel De Control</button>
</body>
</html>
