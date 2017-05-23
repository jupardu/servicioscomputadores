<?php

header("Access-Control-Allow-Origin: *");
include("conexion.php");

$idTecnico = $_POST["idTecnico"];
$idCliente = $_POST["idCliente"];
$tipoEquipo = $_POST["tipoEquipo"];
$marca = $_POST["marca"];
$serial = $_POST["serial"];
$estado = $_POST["estado"];
$observaciones = $_POST["observaciones"];
$avance = $_POST["avance"];

$sentencia = "INSERT INTO ordenes_servicio (id_tecnico, id_cliente, tipo_equipo, marca, serial, estado, observaciones, avance) VALUES ('".$idTecnico."', '".$idCliente."', '".$tipoEquipo."', '".$marca."', '".$serial."', '".$estado."', '".$observaciones."', '".$avance."')";

$query = mysqli_query($conexion, $sentencia);

if($query){
	echo "Se creó la orden de servicio correctamente";
}else{
	echo "No fue posible crear la orden de servicio";
}
mysqli_close($conexion);

?>

