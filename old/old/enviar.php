<?php
        $destino = "ventas@padsa.com.mx";
	//   $destino = "mgopdesa@gmail.com";
       $nombre = $_POST["nombre"];
       $correo = $_POST["correo"];
       $mensaje = $_POST["mensaje"];
       $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
       mail($destino,"Contacto PAD", $contenido);
       header("Location:contenidoMensaje.php");
?>