<?php 
//Conectado con datos.php

include("bdcon.php");

if (isset ($_GET['id'])) {
	$id = $_GET['id'];
	$query = "DELETE FROM clientes WHERE idcliente = '$id'";
	$rsp = mysqli_query($base,$query);
}
if ($rsp) {
	header('Location: mostrardatos.php');
}
else{
	echo "Error";
}
//-------------NO JALO-------------

//if ($rsp) {
//	echo "Conectado";
//}

//------------Didn't work  too----

//$con=include("bdcon.php");

//$idcliente=$_GET['id'];

//$sql = "DELETE FROM clientes WHERE idcliente = '$idcliente'";

//$query=mysql_query($con,$sql);

//if ($query) {
//	header("Location: datos.php");
//}
//----------------------

//Tampoco funciono

//----------------------

//$idcliente = $_GET['id'];

//$usar = include("bdcon.php");

//$sql = "DELETE FROM clientes WHERE idcliente LIKE $idcliente";

//$rsp = mysqli_query($base,$sql);
//$rsp = mysqli_query($usar, $sql);
//if(!$rsp){
//	echo "No se elimino ningun dato";
//}else{
//	header("location: index.php");
//}

//---------------TAMPOCO :C-----------------
//include("bdcon.php");

//$idcliente = $_REQUEST['$idcliente'];
//$squery = "DELETE FROM clientes WHERE idcliente = '$id'";
//$rsp = $base -> query($squery);
//if ($rsp) {
//	header("Location: mostrardatos.php");
//}else{
	//echo "ERROR";
//}
//--------NO----------
?>