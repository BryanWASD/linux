<?php 
//linkeado con index.php
include("bdcon.php");

if (isset($_POST['enviar'])) {
	if (strlen($_POST['nombre'])>=1 && strlen($_POST['apellido']) >=1 && strlen($_POST['correo']) >=1) {
		$nombre = trim($_POST['nombre']);
		$apellido = trim($_POST['apellido']);
		$correo = trim($_POST['correo']);
		$insertar = "INSERT INTO clientes(nombre, apellido, correo) VALUES ('$nombre','$apellido','$correo')";
		$resultado = mysqli_query($base,$insertar);
		if ($resultado) {
			?>
			<h2 class="completo">Registro Exitoso</h2>
			<?php
		} else {
			?>
			<h2 class="fallo">Error en el registro</h2>
			<?php
		}
	} else {
		?>
		<h2 class="fallo">Llena todos los datos porfavor</h2>
		<?php
	}
}

?>