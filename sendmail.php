<?php
include '../library/configServer.php';
include '../library/consulSQL.php';
$receiver = ($_POST['email']);
$digits = 4;
$token = rand(pow(10, $digits-1), pow(10, $digits)-1);
$campos="token='$token'";
if(consultasSQL::UpdateSQL("cliente", $campos, "Email='$receiver'")){
    echo '<script>
        swal({
          title: "Código enviado Actualizada",
          text: "El código se actualizo con éxito",
          type: "success",
          showCancelButton: false,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Aceptar",
          closeOnConfirm: true,
          }
        });
    </script>';
    
}else{
   echo '<script>swal("ERROR", "Ocurrió un error inesperado, por favor intente nuevamente", "error");</script>';
}


$subject = "Restablecimiento de contraseña";

$body = "Hola ahi! Si solicitaste un cambio de contraseña, este es tu código de verificación: '$token'";
$sender = "From:bymcontactorecuperar@gmail.com";
if(mail($receiver, $subject, $body, $sender)){
    echo "Email sent successfully to $receiver";
}else{
    echo "Sorry, failed while sending mail!";
}
?>