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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
    <title>Panel de Navegacion</title>
</head>
<body>
    <h1 class="text-warning text-center"><b>Elige la Acción que deseas realiar</b></h1>

    <div class="container text-center mt-5">
        <div class="row row-cols-2">
          <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Ver Jugadores</h5>
                  <a href="{{ url('/VerJugadores') }}" class="card-subtitle mb-2 card-link">Listar Jugadores</a>

                </div>
              </div>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Añadir Jugadores</h5>
                  <a href="{{ url('/NuevoJugador') }}" class="card-subtitle mb-2 card-link">Nuevos Jugadores</a>

                </div>
              </div>
          </div>
          <div class="col">
            <div class="card mt-3" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">Ver Equipos</h5>
                  <a href="{{ url('/VerEquipos') }}" class="card-subtitle mb-2 card-link">Listar Equipos</a>

                </div>
              </div>
          </div>
            <div class="col">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Añadir Equipos</h5>
                        <a href="{{ url('/NuevoEquipo') }}" class="card-subtitle mb-2 card-link">Nuevos Equipos</a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mt-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Añadir Jugador a Equipo</h5>
                        <a href="{{ url('/NuevoEquipo') }}" class="card-subtitle mb-2 card-link">Añadir Jugdor a Equipo</a>

                    </div>
                </div>
            </div>
        </div>
      </div>
</body>
</html>
