 <?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "12345678";
$bdname = "mybdUnad41";

// Create connection
$conexion = mysqli_connect($servidor, $usuario, $contraseña, $bdname);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE My41 (
id INT(30) PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
marca VARCHAR(30) NOT NULL,
precio VARCHAR(50),
cantidad VARCHAR(50),
)";

if (mysqli_query($conexion, $sql)) {
    echo "Tabla invitados creada con éxito";
} else {
    echo "Error creando tabla: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?> 