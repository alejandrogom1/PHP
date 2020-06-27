<?php
$errores='';
$enviado='';
if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    if(!empty($nombre)){
        $nombre=trim($nombre);
        $nombre=filter_var($nombre, FILTER_SANITIZE_STRING);
         } else {
             $errores .='por favor ingresa un nombre <br/>';
         }
  if(!empty($correo)){
      $correo=filter_var($correo, FILTER_SANITIZE_EMAIL);
      if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
          $errores .='Por favor ingresa un correo valido <br/>';}
      } else{
          $errores.= 'Por favor ingresa un correo <br/>';
            }
    if(!empty($mensaje)){
        $mensaje=htmlspecialchars($mensaje);
        $mensaje=trim($mensaje);
        $mensaje=stripcslashes($mensaje);
    }else{
        $errores.='Por favor ingresa el mensaje <br/>';
    }
    if(!$errores){
        $Enviar='alex_240598@hotmail.com';
        $asunto='Corre de pagina';
        $mensaje1="de: $nombre \n";
        $mensaje1 .="Correo:$correo \n";
        $mensaje1.= "Mensaje: $mensaje \n";
       // mail($Enviar,$asunto,$mensaje1);
        $enviado=true;

    }

}
require 'index.view.php';
?>