<?php
$conexion = mysqli_connect("localhost", "root", "", "envios");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
