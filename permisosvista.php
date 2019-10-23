<a href="permisos.php?accion=agregar">Agregar Permiso</a>
<br>
<br>
<table>
<tr>
<th>ID</th>
<th>Descripcion</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
<?php
while($row = mysqli_fetch_assoc($resultado)){
	$id = $row["id"];
	$descripcion = $row["descripcion"];
	$celdas ="<tr>
	          <td>".$id."</td>
              <td>".$descripcion."</td>
			  <td><a href = 'permisos.php?accion=editar&id=".$id."'>Editar</a></td>
			  <td><a href = 'permisos.php?accion=eliminar&id=".$id."'>Eliminar</a></td>
			  </tr>";
	echo $celdas;
}
?>
</table>