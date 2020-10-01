<DOCTYPE html>
<html>
<head>
	<title>Formulario de Empleados</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet">
</head>
<body>
<br><br><br>

	<form name="formulario" id="formulario" method="POST">
		
		<div align="center">
			<h1>Formulario para crear Deduccion de Planilla</h1>
		</div>

	<div style="width: 80%; margin: auto;">

		<fieldset>
			<legend>Deduccion de Planilla</legend>
			<label>Codigo de la Deduccion</label>
			<input type="text" name="deduccion" id="deduccion"
			maxlength="45" value="">
		</fieldset>


		<fieldset>
			<label>Nombre de la Deduccion</label>
			<input type="text" name="nombrededuccion" id="nombrededuccion"
			maxlength="120" value="">
		</fieldset>


		<fieldset>
			<label>Seleccione</label>
			<select name="cmbpuesto" id="cmbpuesto">
				<option value="ADICCION">ADICCION</option>
				<option value="DEDUCCION">DEDUCCION</option>
				
			</select>
		</fieldset>

	</div>

	</form>

</body>
</html>