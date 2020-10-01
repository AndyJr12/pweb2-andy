<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Empleados</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
</head>
<body>

	<form name="formulario" id="formulario" method="POST">
		
		<div align="center">
			<h1>Formulario para crear Empleados</h1>
		</div>

	<div style="width: 80%; margin: auto;">

		<fieldset>
			<legend>Datos Empleado</legend>
			<label>Cedula</label>
			<input type="text" name="cedula" id="cedula"
			maxlength="45" value="">
		</fieldset>


		<fieldset>
			<label>Nombres</label>
			<input type="text" name="nombres" id="nombres"
			maxlength="120" value="">
		</fieldset>


		<fieldset>
			<label>Apellidos</label>
			<input type="text" name="apellidos" id="apellidos"
			maxlength="120" value="">
		</fieldset>


		<fieldset>
			<label>Fecha de Nacimiento</label>
			<input type="date" name="fecha" id="fecha"
			value="">
		</fieldset>


		<fieldset>
			<label>Puesto</label>
			<select name="cmbpuesto" id="cmbpuesto">
				<option value="BODEGA">BODEGA</option>
				<option value="CONTABILIDAD">CONTABILIDAD</option>
				<option value="SISTEMAS">SISTEMAS</option>
				<option value="CAJERO">CAJERO</option>
			</select>
		</fieldset>


		<fieldset>
			<label>Salario</label>
			<input type="number" name="salario" id="salario" min="0" value="0" step="0.01">
		</fieldset>


		<fieldset>
			<button name="btnguardar" id="btnguardar">Guardar</button>
		</fieldset>
	</div>

	</form>

</body>
</html>