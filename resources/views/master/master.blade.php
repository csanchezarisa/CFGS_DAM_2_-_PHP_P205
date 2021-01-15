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
    <link rel="shortcut icon" href="https://hosting.photobucket.com/albums/jj237/juanlevilla/BigUglyThing2.png" type="image/x-icon">
    <title>@yield('title')</title>
  </head>
  <body>
      <!-- NAVBAR -->
      <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="/">
            <img src="https://hosting.photobucket.com/albums/jj237/juanlevilla/BigUglyThing2.png" alt="Brand logo" width="40px">
        </a>
      
        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link @yield('active-vercoches')" href="/coche">Ver coches</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('active-insertarcoche')" href="/coche/create">Insertar coche</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- HEADER -->
      <div class="jumbotron text-center">
          @yield('header')
      </div>

      <!-- CONTENT -->
      <div class="container" style="margin-bottom: 75px;">
          @yield('content')
      </div>

      <!-- FOOTER -->
      <footer class="bg-dark fixed-bottom" style="padding: 10px;">
        <div class="row">
            <div class="col-sm-8">
                @yield('footer')
            </div>
            <div class="col-sm-4 text-right text-light">
                <h5>By: Cristóbal Sánchez Arisa</h4>
            </div>
        </div>
      </footer>
  </body>
</html>