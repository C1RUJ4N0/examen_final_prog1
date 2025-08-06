<?php 
include "../config/db.php";
$id=$_GET['id'];
$sql = "DELETE FROM entregas WHERE id = $id";
mysqli_query($conexion,$sql);
header("Location:../index.php");

?>