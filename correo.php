<?php
    $destinatario = 'konichiva3125@gmail.com';
    //este es el destinatario al que le llegara el correo
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $email = $_POST['email'];
    $numero = $_POST['numero'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde ayuda al planeta";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo Enviado')</script>";
    echo "<script> setTimeout(\"location.href='./contacto.html'\",1000)</script>";

?>
