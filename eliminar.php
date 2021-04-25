<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "12345678";
$bdname = "mybdUnad41";

$id = $_POST['c'];

// Create connection
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bdname);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM My41 WHERE id=$id";

if (mysqli_query($conexion, $sql)) {
    echo "Registro eliminado";
} else {
    echo "Error eliminando registro: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?> 