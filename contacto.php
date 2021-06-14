<?php
 
if(isset($_POST['Enviar'])) {
    if (!empty($_POST['nombre']) && !empty($_POST['opciones']) && !empty($_POST['titulo']) && !empty($_POST['mensaje']) && !empty($_POST['email'])) {

        $nombre = $_POST['nombre'];
        $opciones = $_POST['opciones'];
        $titulo = $_POST['titulo'];
        $mensaje = $_POST['mensaje'];
        $email = $_POST['email'];
        $header = "From: noreply@exmaple.com;" . "\r\n";
        $header.= "Reply-to: noreply@example.com" .
        "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();

        $mail = @mail($email, $titulo, $opciones, $mensaje, $header);
        if ($mail) {
            echo "<h4>Mail enviado, garcias por contactarnos $nombre<h4>";
        }
    }
}
   