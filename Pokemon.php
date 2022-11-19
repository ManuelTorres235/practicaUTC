<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a href="incio.php"><img src="img/nnn.png" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" color="text-white">
    <ul class="navbar-nav mr-auto">
     <li>
     <a class="nav-link" href="inicio.php">Inicio</a>
      </li> 
   
      <li class="nav-item dropdown">
     <a class="nav-link" href="pokemon.php">Pokedex</a>
      </li> 


  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Video Juegos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mario Bros</a>
          <a class="dropdown-item" href="#">FIFA 22</a>
          <a class="dropdown-item" href="#">Crash Team Racing</a>
        </div>
      </li>

 <li class="nav-item dropdown">
        <a class="nav-link" href="Noticiasyeventos.php">
            Noticias y eventos
        </a>

 <li class="nav-item dropdown">
 <button class="btn btn-danger   ms-auto p-2 bd-highligh  "onclick="location.href='logout.php'">Cerrar Sesion</button>

</nav>
<body>
    <h1 class="title">Pokedex</h1>
    <div class="pokemon-container">

    </div>
    <nav class="pagination" aria-label="...">
        <ul class="pagination">
          <li class="page-item" id="previous">
            <a class="page-link" href="#" tabindex="-1">Anterior</a>
          </li>
          <li class="page-item" id="next">
            <a class="page-link" href="#">Siguiente</a>
          </li>
        </ul>
      </nav>
    <div id="spinner" class="spinner-border text-light" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    <script src="./main.js"></script>
</body>
</html>