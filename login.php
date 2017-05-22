<?php

header("Access-Control-Allow-Origin: *");
include("conexion.php");

$id = $_POST["id"];
$clave = $_POST["clave"];

$sentencia = "SELECT * FROM usuarios WHERE id = '".$id."'AND clave ='".$clave."'";

$query = mysqli_query($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);

if($cantidadRegistros > 0){
		while($row = mysqli_fetch_array($query)){
			echo $row['tipo'];
		}
}else{
	echo "Usuario o Clave incorrectos";
}

mysqli_close($conexion);

?>