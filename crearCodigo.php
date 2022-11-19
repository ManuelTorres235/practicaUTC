<?php 
session_start();
 
$_SESSION['email']=$_POST['email'];
include('conexion.php');
if(!isset($_POST['email'])){
    header('Location: index.php');
    return;
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('conexion.php');
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


$codigo= rand(10000,99999);

$email=$_POST['email'];
$sql= "SELECT name FROM users WHERE email = '$email'";
$sqll= mysqli_query($cnx,$sql);
$result = mysqli_num_rows($sqll);
if($result>0){
$mail = new PHPMailer(true);
    
 try {

     $mail->isSMTP();                                            
     $mail->Host       = 'smtp.gmail.com';                     
     $mail->SMTPAuth   = true;                                   
     $mail->Username   = 'juegospaginahacer1@gmail.com';                     
     $mail->Password   = 'lhyasnfjbmvbqdmj';                               
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
     $mail->Port       = 465;                                    
 
    
     $mail->setFrom('juegospaginahacer1@gmail.com', 'JUEGOS UTC HACER');
     $mail->addAddress($email, 'Usuario');     
  
 
     
     $mail->isHTML(true);                                 
     $mail->Subject = 'Recuperacion de Contrasenas';
     $mail->Body    = 'Tu codigo para restablecer tu contraseña es el siguiente '. $codigo;
   
 
     $mail->send();
    $_POST['email']='';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }
 $_SESSION['codigo']=$codigo;


}
header('Location:codigo.php');
?>