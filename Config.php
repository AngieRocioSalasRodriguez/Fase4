
 <?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "12345678";
$bdnombre = "mybdUnad41";


// Create connection
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bdnombre);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

