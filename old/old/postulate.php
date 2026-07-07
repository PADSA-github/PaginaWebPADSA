<?php
        $destino = "reclutamiento@padsa.com.mx";
       // $destino = "mgopdesa@gmail.com";
       $nombre = $_POST["nombre"];
       $correo = $_POST["correo"];
       $mensaje = $_POST["mensaje"];
       $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;
       mail($destino,"Bolsa de Trabajo PAD", $contenido);
       header("Location:contenidoMsjPostulate.php");
       // echo'<script type="text/javascript">
       //  alert("Gracias por escribirnos, nos pondremos en contacto lo antes posible");
       //  window.location.href="BolsaTrabajo.php";
       //  </script>';
?>