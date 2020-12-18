<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Info de cotxes</title>
  </head>
  <body>
    <div class="jumbotron text-center">
        <h1>Concesionario Sánchez</h1>
        <h2>Coche {{ $coche->id }}</h2>
    </div>
    <div class="container">
        <ul>
            <li>Make: {{ $coche->make }}</li>
            <li>Model: {{ $coche->model }}</li>
            <li>Produced on: {{ $coche->produced_on }}</li>
        </ul>
    </div>
  </body>
</html>