<?php 
/*
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );
$from = "hola@mauramirez.com";
$to = "mgramirez@agenciachida.com";
$name = $_POST['nombre'];
$apellido = $_POST['Apellido'];
$email = $_POST['email'];
$tel = $_POST['telefono'];
$cia = $_POST['cia'];
$msj = $_POST['msj'];
$tema = $_POST['tema'];
$headers = "From:" . $from;
mail($to,$subject,$message, $headers);
echo "The email message was sent.";
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "rmdesarrolloweb@gmail.com";
    $to = "hola@mauramirez.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";*/

if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "hola@mauramirez.com";
    $email_subject = "Contacto vía mail PADSA";
 
    function died($error) {
        // your error code can go here
        echo "Oops!, al parecer ocurrió un error. Intentalo de nuevo";
        echo "A continuación el error.<br /><br />";
        echo $error."<br /><br />";
        echo "Corrigelo e intentalo de nuevo.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['nombre']) ||
        !isset($_POST['apellido']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telefono']) ||
        !isset($_POST['mensaje'])) {
        died('Al parecer hubo un error con tu mensaje.');       
    }
 
     
 
    $first_name = $_POST['nombre']; // required
    $last_name = $_POST['apellido']; // required
    $email_from = "hola@mauramirez.com";
    $telephone = $_POST['telefono']; // not required
    $comments = $_POST['mensaje']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'Parece que la dirección de correo electrónico no es válida.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'El nombre no  es válido.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'El apellido no  es válido<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'El msj no  es válido.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($first_name)."\n";
    $email_message .= "Apellido: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Teléfono: ".clean_string($telephone)."\n";
    $email_message .= "Mensaje: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}


?>