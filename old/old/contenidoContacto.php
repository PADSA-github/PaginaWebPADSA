<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PAD</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="img/PADL.png"/>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
		<div class="container">
			<div class="row">
				<div class="contacto contenido-p">
					<h3 align="center">Comunícate con nosotros</h3><br>
					<form action="enviar.php" method="post" class="col-xs-8 col-xs-offset-2">
						<div class="form-group">
							<input class="form-control" name="nombre" type="text" placeholder="Nombre" required pattern="[A-Za-z-' ']+" value="">
						</div>
						
						<div class="form-group">
							<input class="form-control" name="correo" type="email" placeholder="Correo electrónico" required>
						</div>
						
						<div class="form-group">
							<textarea class="form-control" name="mensaje" placeholder="Escribe tu mensaje" required></textarea>
						</div>

						<div class="form-group divEnviarbtn">
						<input type="submit" value="Enviar" id="boton" class="btnEnviar">
						</div>
					</form>					
					<div class="row">
						<div class="captchaContacto col-xs-12">
							<p>Este sitio está protegido por reCaPTCHA y aplican las <a href="https://policies.google.com/privacy" target="_blank"> Política de privacidad </a> y los <a href="https://policies.google.com/terms" target="_blank">Términos de servicio de Google</a>.</p>
						</div>
					</div>	
				</div>
			</div>
		</div>
</body>
</html>