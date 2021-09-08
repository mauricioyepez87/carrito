
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ingreso Productos</title>
</head>
<body>
<form method="post" action="productoNuevo.php" enctype="multipart/form-data">
	<fieldset>
	<legend>
		Ingrese productos
	</legend>
	
	<label> Ingrese una Cantidad</label><input type="text" name="cantidad"><br>
	<label>Ingrese el Nombre</label><input type="text" name="nombre"><br>
	<label>Ingrese la Descipcion</label><input type="text" name="descripcion"><br>
	<label>Ingrese el Precio</label><input type="number" name="precio"><br>
	<label>Ingrese la Imagen</label><input type="file" name="archivo"><br>
	<input type="submit" name="enviar">
	</fieldset>
</form>

</body>
</html>
