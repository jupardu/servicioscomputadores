
<?php 
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");
include ("conexion.php");

$sentencia= "SELECT  id, nombre, tipo
			 FROM usuarios
			 WHERE tipo = 'cliente'";
$query = mysqli_query ($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);
?>
<div class="form-group">
		  <label for="idCliente">Cliente:</label>
		  <select class="form-control" id="idCliente" name="idCliente">
<?php
if($cantidadRegistros > 0){

	  				 while($row = mysqli_fetch_array($query)){
				     ?><option value = "<?php echo $row["id"];?>"> <?php echo $row["nombre"]; ?></option>
	 				<?php
					}
} ?>
</select>
		  </div> 
<?php
	
	mysqli_close($conexion);
	 ?>



		    

	
	
	
	
	
	
	
	


