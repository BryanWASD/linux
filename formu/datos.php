<?php
//linkeado con mostrardatos.php
$traer = include("bdcon.php");
if ($traer ) {
	$mostraar = "SELECT * FROM clientes";
	$resullt = mysqli_query($base,$mostraar);
	if($resullt){
		while ($row = $resullt ->fetch_array()) {
			$idcliente = $row['idcliente'];
			$nombre = $row['nombre'];
			$apellido = $row['apellido'];
			$correo = $row['correo'];
			?>
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Correo</th>
					<th>Opcion</th>
				</tr>
				<tr>
					<td><?php echo $idcliente ?></td>
					<td><?php echo $nombre  ?></td>
					<td><?php echo $apellido ?></td>
					<td><?php echo $correo ?></td>
					<td><a href="elim.php?id=<?php echo $row['idcliente']?>">Eliminar</a></td>

				</tr>
				<br>
			</table>
			<?php
		}
	}
}
?>