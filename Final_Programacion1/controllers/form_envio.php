<?php 
include "../config/db.php";

$id =$envio['id'] ?? '';
$nombre =$envio['nombreEnvio']?? '';
$direccion =$envio['direccion']?? '';
$cp =$envio['codigoPostal']?? '';
$estado =$envio['estadoEnvio']?? '';
$fecha =$envio['fechaEnvio']?? '';
?>
<form action="../controllers/agregar_envio.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
Nombre: <input name="nombreCliente" value="<?= $nombre ?>">
Direccion: <input name="direccion" value="<?= $direccion ?>">
CP: <input name="codigoPostal" value="<?= $cp ?>">
Estado: <select name="estadoEnvio">
    <option><?= $envio == 'Pendiente' ? 'selected' : '' ?>Pendiente</option>
    <option><?= $envio == 'En transito' ? 'selected' : '' ?>En transito</option>
    <option><?= $envio == 'Entregado' ? 'selected' : '' ?>Entregado</option>
    <option><?= $envio == 'Cancelado' ? 'selected' : '' ?>Cancelado</option>
</select><br>
<input type="submit" value="Guardar">;
Fecha: <input type="date"  name="fechaEnvio" value="<?= $fecha ?>">
</form>
<a href='../index.php'>Volver</a>;