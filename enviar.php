<?php

    $destino = "aranaz@gmail.com";
    
    $nombre = $_POST["Nombre"];
    $correo = $_POST["Correo"];
    $telefono = $_POST["Telefono"];
    $mensaje = $_POST["Mensaje"];

    $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

    mail($destino,"Consulta de la Web",$contenido); /* correo que recibo yo */
    mail($correo,"Hemos recibido tu consulta",$contenido); /* correo que recibe el cliente */
    
    header("location:gracias.html");
?>