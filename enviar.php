<?php
    $destino="mg.marinera.es@gmail.com";
    $nombre=$_POST["Nombre"];
    $correo=$_POST["Correo"];
    $phone=$_POST["Telefono"];
    $mensaje=$_POST["Mensaje"];
    $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $phone . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto",$contenido);
    header("Location:https://mgmarinera.github.io/MGmarinera/index.html");
?>
