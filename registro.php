

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
<!-- CDN  MDB 4.19.1 -->

<!-- CSS -->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JavaScript -->

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
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
     body{  background-image: url(img/mario.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        background-attachment: fixed; 
      }
      .contenedor{
          width: 80%;

        align-content: center;
 
        margin: auto;
        display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
      }
      .contenedor input {
  
        width: 500px;
        margin: auto;
      }

      .contenedor button {
       
        width: 500px;
        margin: auto;
        
      }
      .titulo{
        color: white;
        font-family: arial;
        text-align: center;
        padding:20px;
      }
   .form-label{
       color: white;
   }
   
   

      .invalid{
        color: rgb(233, 33, 33);
      }
</style>
<script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap">
</script>

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
<button class="btn btn-outline-danger my-5 my-sm-0"onclick="location.href='session.php'">Iniciar Sesion</button></a>
    
    
  </div>
</nav>
      
<h1 class="titulo"><b>Registro<b></h1>
 <div class="contenedor">

   <form action="validar.php" id="form" method="post">

    <div class="mb-3">
      <label for="" class="form-label">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder=""  > 
      <p class="invalid" disabled id="name-invalid"></p>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Correo</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="" >
        <p class="invalid" disabled id="email-invalid"></p>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="" >
        <p class="invalid" disabled id="pass-invalid"></p>
      </div>
      <div class="mb-3">
        <div class="mb-3">
          <label for="" class="form-label">Roles</label>
          <select class="form-control" name="rol" id="">
            <option value='0'>Usuario</option>
            <option value='1'>Administrador</option>
          
          </select>
        </div>
      </div>
      <button class="btn btn-danger" id="login" type="button">Entrar</button>

      <div class="mb-3">
     
        <!-- <button class="g-recaptcha btn btn-danger" 
        data-sitekey="6LcG6UggAAAAAKYP6NRmMW3PK1mXlhAJnPTWxyvp" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button> -->
    </div>
   </form>



 </div>



        </body>


</html>        
<script src="https://www.google.com/recaptcha/api.js?render=6LcG6UggAAAAAKYP6NRmMW3PK1mXlhAJnPTWxyvp"></script>

<script>


    $(document).ready(function() {
        $('#login').click(function(){

          let name= document.getElementById('name');
          let nameInvalid = document.getElementById('name-invalid');
          
          let email= document.getElementById('email');
          let emailInvalid = document.getElementById('email-invalid');


          let pass= document.getElementById('pass');
          let passInvalid = document.getElementById('pass-invalid');
          
          if(pass.value=='' || email.value=='' || name.value=='' ){
          if (name.value=='') {          
            nameInvalid.innerHTML='Este campo no puede ser vacio';          
          }
          if (email.value=='') {          
            emailInvalid.innerHTML='Este campo no puede ser vacio';          
          }
          if (pass.value=='') {          
            passInvalid.innerHTML='Este campo no puede ser vacio';          
          }
          }
  

          if(name.value!=''){
            nameInvalid.innerHTML='';  
            var namevalid=true;
            let passLength= pass.value.length;
            if(passLength<8){
            passInvalid.innerHTML='Este campo tiene que ser mayor a 8 caracteres';          
            }else  passInvalid.innerHTML='';
          }

          if(pass.value!=''){
            passInvalid.innerHTML='';  
            let passLength= pass.value.length;
            if(passLength<8){
            passInvalid.innerHTML='Este campo tiene que ser mayor a 8 caracteres';          
            }else{ 
            var passvalid=true;
            passInvalid.innerHTML='';}
          }

          if(email.value!=''){
            emailInvalid.innerHTML='';  
            re=/^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
            if(!re.exec(email.value)){
              emailInvalid.innerHTML='Se debe ingresar un email valido para continuar';  
            }else{
              var emailvalid=true;
              emailInvalid.innerHTML='';  
            }            
          }

          console.log(emailvalid, passvalid,emailvalid);

         if(namevalid==true && passvalid==true && emailvalid==true){

            grecaptcha.ready(function() {
        grecaptcha.execute('6LcG6UggAAAAAKYP6NRmMW3PK1mXlhAJnPTWxyvp', {action: 'validarUsuario'}).then(function(token) {
           
            $('#form').prepend('<input type="hidden" name="token" value="'+token+'">');
            $('#form').prepend('<input type="hidden" name="action" value="validarUsuario">');
            
            $('#form').submit(); 
           
           
        });
      });
    }
          
        })
    })


 
</script>