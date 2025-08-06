<?php 
include "../config/db.php";

$id =$_POST['id'] ;
$nombre =$_POST['nombreCliente'];
$direccion =$_POST['direccion'];
$cp =$_POST['codigoPostal'];
$estado =$_POST['estadoEnvio'];
$fecha =$_POST['fechaEnvio'];

if (isset($_POST['id'] )){
    $id=$_POST['id'];
    $sql="UPDATE entregas SET nombreCliente='$nombre', direccion='$direccion', codigoPostal='$cp', estadoEnvio='$estado', fechaEnvio='$fecha' WHERE id = $id";
}else{
    $sql="INSERT INTO entregas (nombreCliente, direccion, codigoPostal, estadoEnvio, fechaEnvio)
    VALUES ('$nombre','$direccion','$cp',$estado','$fecha')";
}
mysqli_query($conexion, $sql);
header("Location: ../index.php");
include("../config/form_envio.php");
?>