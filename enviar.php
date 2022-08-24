<?php
    $destino="mg.marinera.es@gmail.com";
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $phone=$_POST["telefono"];
    $mensaje=$_POST["mensaje"];
    $contenido="Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $phone . "\nMensaje: " . $mensaje;
    mail($destino,"Contacto",$contenido);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
