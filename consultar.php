<?php

require('config.php');

$id = $_POST['id'];


$sql = "SELECT id, n, m, p, c FROM My41 WHERE id=$id";
$result = mysqli_query($conexion, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {



        echo "id: " . $row["id"]. " - Nombre: " . $row["n"]. " " . $row["m"]. " ". $row["p"]. "". $row["c"]. ""."<br>";

        
$myJSON = json_encode($row);

echo $myJSON;

    }


} else {
    echo "Ese cliente no existe";
}

mysqli_close($conexion);
?> 