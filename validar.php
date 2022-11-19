<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require('conexion.php');
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

define('CLAVE', '6LcG6UggAAAAAPbn7L7osSiA-0r1TwrwdVMg5eHs');


$token=$_POST['token'];
$action=$_POST['action'];


$cu = curl_init();
curl_setopt($cu, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
curl_setopt($cu, CURLOPT_POSTFIELDS,http_build_query(array('secret'=>CLAVE,'response'=>$token)));
curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cu);
curl_close($cu);

$datos = json_decode($response,true);


if($datos['success']==1 && $datos['score']>=0.5){

 $name = $_POST['name'];
 $email= $_POST['email'];
 $pass=$_POST['pass'];
$rol= $_POST['rol'];
 $sql= "INSERT INTO users VALUES ('','$name','$pass','$email','$rol')";
 mysqli_query($cnx,$sql);

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
     $mail->Subject = 'Usuario generado con exito';
     $mail->Body    = 'El usuario <b>'.$name.'</b> se ha generado con exito';
   
 
     $mail->send();
    
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
 }


 header('location:session.php');


    
}else{
    echo 'Verificacion incorrecta';
};





?>