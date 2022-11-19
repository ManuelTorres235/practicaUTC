<?php
  session_start();
  include("conexion.php");
  if (isset($_POST['iniciar'])) 
  {
    $email=$_POST['email'];
    $pass= $_POST['pass'];

    $sql= "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
    $query= mysqli_query($cnx,$sql);
    $result = mysqli_num_rows($query); 
    if($result>0){
      $dato=mysqli_fetch_array($query);
       $rol = $dato['rol'];
      $_SESSION['user']=$dato['name'];
      $_SESSION['rol']=$rol;
      if($rol==1){
        header('Location: admin.php');
      }else{
        header('Location: inicio.php');
      }
        }
  }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio de session</title>
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
        background-image: url(img/mario.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
      }
      .pointer{
        cursor: pointer;
        font-size:15px;
      }
      .pointer:hover{
        filter: grayscale(80%);
        transition:1s;
      }
</style>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap"></script>
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
   
 </li>
    </ul>
<button class="btn btn-outline-warning my-5 my-sm-0"onclick="location.href='registro.php'">Registrate</button></a>
    
    
  </div>
</nav>

        <header>
          

<br><br>
 

<div class="col">
    <div class="d-flex justify-content-center align-items-center" style="height: 67.2vh">
        <div class="text-white">
          <h2 class="mb-3">Inicia sesión</h2>
          <br>

            <form method="post">
              <!-- User input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example1" style="color:white">Correo</label>
                <input type="email" name="email"width="100px" id="user" autofocus required="" class="form-control" style="color:black" />
                
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form1Example2" style="color:white">Contraseña</label>
                <input type="password" style="width : 450px; heigth : 450px" name="pass" id="psw"autofocus required="" class="form-control" style="color: black"/>
          
              </div>
              <div class="form-outline-mb-4 badge bg-danger"  >
              <span class="badge bg-danger  pointer" onclick="location.href='olvidar.php'">Olvide la contraseña</span>
              </div>
              <br>
              <!-- Submit button -->
              <button name="iniciar" type="submit" class="btn btn-danger ">Entrar</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>




    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>




  </br>
     
        
	</center>