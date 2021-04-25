 <?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "12345678";
$bdname = "mybdUnad41";

$c = $_POST['id'];
$n = $_POST['nombre'];
$m = $_POST['marca'];
$p = $_POST['precio'];
$c = $_POST['cantidad'];

// Create connection
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bdname);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE My41 SET nombre='$n', marca='$m', precio='$p', cantidad='$c'  WHERE id='$c'";

if (mysqli_query($conexion, $sql)) {
    echo "Información actualizada con éxito";
} else {
    echo "Error actualizando la información: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?> 