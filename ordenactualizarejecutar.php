<?php

header("Access-Control-Allow-Origin: *");
include("conexion.php");

$numero = $_POST["numero"];
$idTecnico = $_POST["idTecnico"];
$idCliente = $_POST["idCliente"];
$tipoEquipo = $_POST["tipoEquipo"];
$marca = $_POST["marca"];
$serial = $_POST["serial"];
$estado = $_POST["estado"];
$observaciones = $_POST["observaciones"];
$avance = $_POST["avance"];

$sentencia = "UPDATE ordenes_servicio SET ultimo_cambio = now(), tipo_equipo = '".$tipoEquipo."', marca = '".$marca."', serial = '".$serial."', estado = '".$estado."', observaciones = '".$observaciones."', avance = '".$avance."'
	WHERE numero = '".$numero."' ";

$query = mysqli_query($conexion, $sentencia);

if($query){
	echo "Se actualizó la orden de servicio correctamente";
}else{
	echo "No fue posible actualizar la orden de servicio";
}
mysqli_close($conexion);

?>