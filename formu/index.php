<!--Linkeado con registro.php-->
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
	<link rel="stylesheet" href="estilo.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body background="https://cdn.pixabay.com/photo/2016/10/11/21/43/geometric-1732847_1280.jpg">
	<h1>Formulario de registro</h1>
	<div class="frm">
	<form method="post">
		<input type="text" name="nombre" placeholder="Nombre">
		<br>
		<input type="text" name="apellido" placeholder="Apellido">
		<br>
		<input type="mail" name="correo" placeholder="Correo">
		<br>
		<input type="submit" name="enviar" value="Registro">
		<input formaction="mostrardatos.php" type="submit" name="datoos" value="Ver datos">
	</form>
	</div>
<!--
	<form method="post" action="mostrardatos.php">
	</form>
-->
	<?php 
	include("registro.php");
	 ?>
</body>
</html>