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
header('content-type: application/json; charset=utf-8');
//en caso de json en vez de jsonp habría que habilitar CORS:
header("access-control-allow-origin: *");
include ("conexion.php");
$numero = $_POST["numero"];

$sentencia= "SELECT *
           FROM ordenes_servicio
           WHERE numero = '".$numero."' ";

$query = mysqli_query ($conexion,$sentencia);

$cantidadRegistros = mysqli_num_rows($query);

if($cantidadRegistros > 0){

             while($row = mysqli_fetch_array($query)){
             ?>
             
             <div class="form-group">
              <label for="fechaI">Fecha Ingreso:</label>
              <input type="text" class="form-control" id="fechaI" name="fechaI" value="<?php echo $row["fecha_ingreso"];?>">
            </div>

             <div class="form-group">
              <label for="idTecnico">Técnico:</label>
              <select class="form-control" id="idTecnico" name="idTecnico">
                <option value="<?php echo $row["id_tecnico"];?>"><?php echo $row["id_tecnicos"];?></option>
              </select>
             </div>

             <div class="form-group">
              <label for="idCliente">Cliente:</label>
              <select class="form-control" id="idCliente" name="idCliente">
                <option value="<?php echo $row["id_cliente"];?>"><?php echo $row["id_cliente"];?></option>
              </select>
             </div>

            <div class="form-group">
              <label for="tipoEquipo">Tipo de Equipo:</label>
              <select class="form-control" id="tipoEquipo" name="tipoEquipo">
                <option value="<?php echo $row["tipo_equipo"];?>"><?php echo $row["tipo_equipo"];?></option>
                <option value="portatil">Portatil</option>
                <option value="escritorio">Escritorio</option>
              </select>
            </div>
            
            <div class="form-group">
              <label for="marca">Marca:</label>
              <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row["marca"];?>">
            </div>

            <div class="form-group">
              <label for="serial">Serial:</label>
              <input type="text" class="form-control" id="serial" name="serial" value="<?php echo $row["serial"];?>">
            </div>

            <div class="form-group">
              <label for="estado">Estado:</label>
              <select class="form-control" id="estado" name="estado">
                <option value="<?php echo $row["estado"];?>"><?php echo $row["estado"];?></option>
                <option value="ingresado">Ingresado</option>
                <option value="reparacion">Reparación</option>
                <option value="terminado">terminado</option>
                <option value="entregado">entregado</option>
               </select>
              </div>

              <div class="form-group">
              <label for="observaciones">Observaciones:</label>
              <textarea class="form-control" rows="5" id="observaciones" name="observaciones"><?php echo $row["observaciones"];?></textarea>
            </div>

            <div class="form-group">
              <label for="avance">Avance:</label>
              <textarea class="form-control" rows="5" id="avance" name="avance"><?php echo $row["avance"];?></textarea>
            </div>
            
             <?php             
          }
}
  
  mysqli_close($conexion);
   ?>

   </body>
</html>