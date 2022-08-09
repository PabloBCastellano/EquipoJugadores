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
<script src="{{ asset('../resources/js/Validaciones.js')}}" defer></script>
    <title>Añadir Jugador</title>
</head>
<body>
    <form  method="POST">
        @csrf
        <div class="mb-3">
          <label  class="form-label">Nombre del Jugador</label>
          <input type="text" class="form-control" name="Player_Name"/>

        </div>
        <div class="mb-3">
          <label  class="form-label">Numero de Camiseta</label>
          <input type="int" class="form-control" name="TShirt_Number">
        </div>
        <div class="mb-3" id="Enviar">
            <button type="submit" name="NuevoJugador" class="btn btn-primary">Dar de Alta al Jugador</button>
        </div>
      </form>
</body>
</html>
