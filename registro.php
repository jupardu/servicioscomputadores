<?php

header("Access-Control-Allow-Origin: *");
include("conexion.php");

$id = $_POST["id"];
$clave = $_POST["clave"];
$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];

$sentencia = "INSERT INTO usuarios (id, clave, nombre, tipo) VALUES ('".$id."', '".$clave."', '".$nombre."', '".$tipo."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
	echo "Se creó el usuario correctamente";
}else{
	echo "No fue posible crear el usuario";
}
mysqli_close($conexion);

?>