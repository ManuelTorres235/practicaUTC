<?php 
# CDN de MDB 4.19.0
require_once 'cdn.html';
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nintendo</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.19.1.min.css?ver=4.19.1" rel="stylesheet">
<script type="text/javascript">
</script>
      <style>
    #map {
       height: 100%;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #map {
       height: 90%;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
     body{
background-color: #eee;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
      }  
</style>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a href="index.php"><img src="img/nnn.png" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent" color="text-white">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">  
 </li>
    </ul>
      <button class="btn btn-outline-warning my-5 my-sm-0"onclick="location.href='registro.php'">Registrate</button></a>
      <button class="btn btn-outline-danger my-5 my-sm-0"onclick="location.href='session.php'">Iniciar session</button>
  </div>
</nav>
        <header>
            <br> <br> 
            <div class="container d-flex align-items-center flex-column">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/fond.avif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/fond.avif" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/fond.avif" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</body>
</html>        
     