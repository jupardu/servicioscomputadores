<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php 
header("access-control-allow-origin: *");
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");
include ("conexion.php");

$sentencia= "SELECT * FROM ordenes_servicio WHERE estado != 'terminado'";
$query = mysqli_query ($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);

if($cantidadRegistros > 0){
?>

<div class="container">
                                                                                       
	  
	  				<?php while($row = mysqli_fetch_array($query)){ ?>
				    <div class="table-responsive">          
	  				<table class="table">
				    <thead>
				      <tr>
				        <th><h2>Número de Orden: <?php echo $row["numero"]; ?> </h2> </th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>Fecha Ingreso: <?php echo $row["fecha_ingreso"]; ?></td></tr>
				        <tr><td>Ultimo Cambio: <?php echo $row["ultimo_cambio"]; ?></td></tr>
				        <tr><td>Id Técnico: <?php echo $row["id_tecnico"]; ?></td></tr>
				        <tr><td>Id Cliente: <?php echo $row["id_cliente"]; ?></td></tr>
				        <tr><td>Marca: <?php echo $row["marca"]; ?></td></tr>
				        <tr><td>Serial: <?php echo $row["serial"]; ?></td>
				        <tr><td>Estado: <?php echo $row["estado"]; ?> </td>
				        <tr><td>Observacines: <?php echo $row["observaciones"]; ?></td>
				        <tr><td>Avance: <?php echo $row["avance"]; ?></td>
				      </tr>
				    </tbody>
				    
	  </table>
	  </div>
	 <?php
					}
					}else{
						echo "No hay registros";
					}


					mysqli_close($conexion);
					 ?> 
</div>

</body>
</html>

	
	
	
	
	
	
	
	


