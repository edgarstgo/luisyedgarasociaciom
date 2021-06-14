<?php
 
if($_POST) {
    $nombre_visita = "";
    $email_visita = "";
    $titulo_email = "";
    $seleccion_opcion = "";
    $mensaje_visita = "";
     
    if(isset($_POST['nombre_visita'])) {
      $nombre_visita = filter_var($_POST['nombre_visita'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['email_visita'])) {
        $email_visita = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email_visita']);
        $email_visita = filter_var($email_visita, FILTER_VALIDATE_EMAIL);
    }
     
    if(isset($_POST['titulo_email'])) {
        $titulo_email = filter_var($_POST['titulo_email'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['seleccion_opcion'])) {
        $seleccion_opcion = filter_var($_POST['seleccion_opcion'], FILTER_SANITIZE_STRING);
    }
     
    if(isset($_POST['mensaje_visita'])) {
        $mensaje_visita= htmlspecialchars($_POST['mensaje_visita']);
    }
     
    if($seleccion_opcion == "Practicas") {
        $recipient = "edgarsantiagohernandez@gmail.com";
    }
    else if($seleccion_opcion == "Redes Sociales") {
        $recipient = "edgarsantiagohernandez@gmail.com";
    }
    else if($seleccion_opcion == "Ubicacion") {
        $recipient = "edgarsantiagohernandez@gmail.com";
    }
    elseif ($seleccion_opcion == "Informacion de los Autores") {
        $recipient = "edgarsantiagohernandez@gmail.com";
    }
    else {
        $recipient = "edgarsantiagohernandez@gmail.com";
    }
     
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email_visita . "\r\n";
     
    if(@mail($recipient, $titulo_email, $mensaje_visita, $headers)) {
        echo "<p> Gracias por contactarnos, $nombre_visita. Tratarremos de contactarnos con usted lo antes posible</p>";
    } else{
        echo '<p>Lo sentimos pero su mensaje no pudo ser enviado</p>';
     } 
 }
?>
