<?php
    $destino = "hecalp_97@outlook.com";
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    $contenido = "Nombre: ". $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
    mail($destino,"Soporte Preguntas CSTIC", $contenido);
    header("Location:index.html")

?>