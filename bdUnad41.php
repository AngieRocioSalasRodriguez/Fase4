 <?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "12345678";

// Create connection
$conexion = mysqli_connect($servidor, $usuario, $contraseña);
// Check connection
if (!$conexion ) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE mybdUnad41";
if (mysqli_query($conexion onn, $sql)) {
    echo "Base de datos creada satisfactoriamente";
} else {
    echo "Error creando base de datos: " . mysqli_error($conexion );
}

mysqli_close($conexion );
?> 
