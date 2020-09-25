<?php
// Variables
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_reread";
// Creamos conexion
$conn = mysqli_connect($host, $user, $pass, $db);
// Comprobamos conexion
if(!$conn){
    echo "Error: Nos se pudo conectar a MYSQL." . PHP_EOL;
    echo "Error de depuracion: " . mysqli_connect_errno(). PHP_EOL;
    exit;
}else{
    mysqli_set_charset($conn, "utf8");
}
?>