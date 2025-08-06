<?php 
include "../config/db.php";

$id=$_GET['id'];
$sql = "SELECT * FROM entregas WHERE id = $id";
$resultado= mysqli_query($conexion,$sql);
$envio=mysqli_fetch_assoc($resultado);

header("Location: ../index.php");
?>