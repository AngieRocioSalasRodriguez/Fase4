<!DOCTYPE html>
<html lang="es">
<head>
  <title>Ingresar producto</title>
    <title>Ingresar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
</head>
<body>



 <?php

require('config.php');

$id = $_POST['id'];
$n = $_POST['nombre'];
$m = $_POST['marca'];
$p = $_POST['precio'];
$c = $_POST['cantidad'];



$sql = "INSERT INTO My41 (id, nombre, marca, precio, cantidad) VALUES ('$id', '$n', '$m', '$p', '$c')";

if (mysqli_query($conexion, $sql)) {
 
?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Excelente</h4>
          <button class="close" onclick="location.href='form_ingresar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Datos grabados safisfactoriamente
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='form_ingresar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php
} else 
{



?>

<!-- The Modal -->
  
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Error</h4>
          <button class="close" onclick="location.href='form_ingresar.html'">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Los datos no pudieron ser grabados

        </div>

        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-danger" onclick="location.href='form_ingresar.html'">Cerrar</button>
        </div>
        
      </div>
    </div>



 <?php

 echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
 //  echo '<script language="javascript">alert("Datos grabados satisfactoriamente'.$i.'");window.location.href="form_insertar.html"</script>';

}

mysqli_close($conexion);

?> 