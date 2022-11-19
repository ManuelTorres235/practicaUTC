<?php
	session_start();
  include("cnn.php");
  if (!isset($_SESSION['user'])) {
    # code...
    header("Location:index.php");
  }

  $user=$_SESSION['user'];
?>
<?php 
# CDN de MDB 4.19.0
require_once 'cdn.html';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<link href="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/css/compiled-4.19.1.min.css?ver=4.19.1" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!-- MDB icon -->
    <link rel="icon" href="img/ico.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <style>
    	      body{
        background-image: url(img/fondo3.webp);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
      }
      
    </style>
</head>
<body>
	<header>

 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
 <a href="homepage.php"><img src="img/nnn.png" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
          aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" color="text-white">
    <ul class="navbar-nav mr-auto">
      <font color="white">
    
      </li> </font>
   

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Consolas
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ns.php">Nintendo Switch</a>
          <a class="dropdown-item" href="ns.php">Nintendo DS</a>
          <a class="dropdown-item" href="n64.php">Nintendo 64</a>
        </div>
      </li>

  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Video Juegos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="MB.php">Mario Bros</a>
          <a class="dropdown-item" href="fifa.php">FIFA 22</a>
          <a class="dropdown-item" href="CTR.php">Crash Team Racing</a>
        </div>
      </li>

 <li class="nav-item dropdown">
        <a class="nav-link" href="Noticiasyeventos.php">
            Noticias y eventos
        </a>


 </li>
    </ul>


     

    
<button class="btn btn-outline-warning my-5 my-sm-0"onclick="cerrarSesion()">Cerrar Session</button></a>
    
  </div>
</nav>

        <header>
            <br> <br>

	</header>

<?php 

          $sql=$cnnPDO->prepare('SELECT * FROM users WHERE user = :user');

            $sql->bindParam(':user', $_SESSION['user']);
            $sql->execute();
            
              $results = $sql -> fetchAll(PDO::FETCH_OBJ);

              foreach ($results as $dato) {
            
                
              }
 ?>


	<div class="container-fluid">
		<h2 style="color: white">Bienvenid@ 
     <span class="badge" style="background-color: yellow;">  <?php echo $_SESSION['user'] ?></span></h2>
	</div>
	<br>


<br><br><br><br><br><br><br><br>
	<!-- MDB -->
  	<script type="text/javascript" src="js/mdb.min.js"></script>
  	<!-- Custom scripts -->
  	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  	<script type="text/javascript">
  		 function cerrarSesion(){
   Swal.fire({
  title: '¿Estas seguro de querer cerrar tu sesión?',
  text: "Tendras que iniciar sesión nuevamente!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#006647',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Cerrar sesión',
  cancelButtonText: 'Cancelar'
}).then((result) => {
  if (result.isConfirmed) {
    window.location = "logout.php";
  }
})
  };
  	</script>
</body>
</html>