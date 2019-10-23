<form action = 'permisos.php' method = 'POST'>
<fieldset>
<legend>Datos de los permisos</legend>
<label>Descripcion:</label>
<input type = 'text' name = 'descripcion' value="<?php echo $descripcion; ?>" ></input>
<input type = 'hidden' name = 'accion' value="<?php echo $accion; ?>"></input>
<input type = 'hidden' name = 'id' value="<?php echo $ideditar; ?>"></input>
<button>Enviar</button>
</fieldset>
</form>

