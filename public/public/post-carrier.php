<?php
header('Content-Type: text/html; charset=UTF-8');
if(isset($_POST['email'])) {
	    // EDIT THE 2 LINES BELOW AS REQUIRED
	    $email_to = "reclutamiento@padsa.com.mx";
	    $email_subject = "C.V. desde  PADSA.com.mx";

	    function died($error) {
	        // your error code can go here
	    echo "Oops!, al parecer ocurrió un error. Intentalo de nuevo";
	    echo "A continuación el error.<br /><br />";
	    echo $error."<br /><br />";
	    echo "Corrigelo e intentalo de nuevo.<br /><br />";
	    die();
    }
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['posicion']) ||
        !isset($_POST['mensaje'])) {
       died('Al parecer hubo un error con tu mensaje.');
    }
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['mensaje']; // required
    $posicion = $_POST['posicion']; // required

    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Parece que la dirección de correo electrónico no es válida.<br />';
  }

    $string_exp = "";

  if(strlen($first_name) < 2) {
    $error_message .= 'Parece que el nombre no es válido.<br />';
  }

   if(strlen($last_name) < 2) {
    $error_message .= 'Parece que el apellido no es válido.<br />';
  }

  if(strlen($comments) < 2) {
   $error_message .= 'Parece que el mensaje no es válido.<br />';
  }

  if(strlen($error_message) > 0) {
    died($error_message);
  }

  $dir_subida = 'uploads/';
  $fichero_subido1 = $dir_subida . basename($_FILES['image']['name']);
  $fichero_subido2 = $dir_subida . basename($_FILES['extra']['name']);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $fichero_subido1)) {
    if(move_uploaded_file($_FILES['extra']['tmp_name'], $fichero_subido2)){
      //  echo "se subieron ambos archivos sin problema";
    }
    else{
      //echo "se subio el primero pero el segundo no";
    }



  } else {
      //echo "no se pudo subir el primero";
  }



    $email_message = "La siguiente persona desea trabajar en PADSA.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
      utf8_encode($string);
      utf8_decode($string);
    }

 $urlfile="http://www.padsa.com.mx/".$fichero_subido1;
 $urlfile2="http://www.padsa.com.mx/".$fichero_subido2;


    $email_message .= "Nombre: ".clean_string($first_name)."\n";
    $email_message .= "Apellido: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Teléfono: ".clean_string($telephone)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
    $email_message .= "Posición: ".clean_string($posicion)."\n";
    $email_message .= "CV: <a href='".clean_string($urlfile)."'>Descargar</a>\n";
    $email_message .= "Extra: <a href='".clean_string($urlfile2)."'>Descargar</a>\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
"MIME-Version: 1.0\r\n".
"Content-Type: text/html; charset=\"UTF-8\"\r\n" .
"Content-Transfer-Encoding: 8bit\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

?>
<!-- include your own success html here -->

<!doctype html>
<html lang="es-mx">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


    <title>PAD | Contacto</title>
  </head>
  <body>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <div id="fb-root"></div>

    <div class="main">

      <?php include 'header.php'?>
    <div class=" item imagen-central contacto">
       <div class="container-fluid h-100">
           <div class="container h-100 ">
              <div class="row h-100 d-flex align-items-center">
                <div class="col-md-12 text-center">
                  <div class="wow bounceInDown" data-wow-delay="4.5s">
                 	   <h1 class="bebas color-white">
                        Gracias por contactarnos
                       </h1>
                       <h3 class="text-white">En breve un asesor se pondrá en contacto con usted.</h3>
                  </div>
                </div><!--fin col-->


              </div>
            </div>
       </div>
    </div><!--fin imagen central-->
    <script>
     var menuActivo = 'mcontacto';
      var menuSiguiente = 'carrier.php';
    </script>
    <?php include 'footer.php'?>
    <?php include 'scripts.php'?>
    <link rel="stylesheet" href="https://use.typekit.net/ira8htz.css">
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script>
      $(window).bind("load", function(){
        $(".carrier").addClass("animado");
      })

    </script>
  </div><!--fin main-->
  </body>
</html>

<?php

}
?>
