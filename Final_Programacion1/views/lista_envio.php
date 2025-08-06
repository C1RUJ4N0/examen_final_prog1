<?php
include ("../config/db.php");


$resultado = mysqli_query($conexion,"SELECT * FROM entregas ORDER BY fechaEnvio DESC");

echo "<h2>Lista de envios</h2>";
echo "<a href='agregar_envio.php'>Guardar nuevo envio</a><br><br>";
echo "<table border='1' cellpadding='5'>

<tr>
<th>ID</th>
<th>Nombre</th>
<th>Direccion</th>
<th>CP</th>
<th>Estado</th>
<th>Fecha</th>
<th>Acciones</th>
</tr>";

while ($fila = mysqli_fetch_assoc($resultado)){
    echo "<tr>
    <td>{$fila['id']}</td>
    <td>{$fila['nombreCliente']}</td>
    <td>{$fila['direccion']}</td>
    <td>{$fila['codigoPostal']}</td>
    <td>{$fila['estadoEnvio']}</td>
    <td>{$fila['fechaEnvio']}</td>
    <td>
    <a href='editar_envio.php?id={$fila['id']}'>Editar</a>
    <a href='eliminar_envio.php?id={$fila['id']}'>Eliminar</a>
    </td>
    </tr>";
}
echo "</table>";
?>