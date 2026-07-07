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
	<script type="text/javascript">
		window.onload = function(){
			var nav = document.getElementById("op4");
			nav.style.backgroundColor='#C5353A';
			nav.style.color='white';
		}
	</script>
	<!--Navbar-->
	<?php include 'Nav.php';?>
	
	<!--Contenido-->
	<section class="main container-fluid">
		<!--Informacion-->
		<?php include 'contenidoMensaje.php';?>
	</section>
	
	<!--Pie de pagina-->
		<?php include 'footer.php';?>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>