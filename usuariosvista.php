<a href="usuarios.php?accion=agregar">Agregar Usuario</a>
<br>
<br>
<table>
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Correo</th>
<th>Permiso</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($resultado)){
	$id = $row["id"];
	$nombre = $row["nombre"];
	$correo = $row["correo"];
	$permiso = $row["id_permisos"];
	$celdas ="<tr>
	          <td>".$id."</td>
              <td>".$nombre."</td>
			  <td>".$correo."</td>
			  <td>".$permiso."</td>
			  <td><a href = 'permisos.php?accion=editar&id=".$id."'>Editar</a></td>
			  <td><a href = 'permisos.php?accion=eliminar&id=".$id."'>Eliminar</a></td>
			  </tr>";
	echo $celdas;
}
?>
</table>