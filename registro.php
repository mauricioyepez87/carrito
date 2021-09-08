<?php
include("funciones.php");
$conect =conexion();
if (isset($_POST['enviar'])) {
	$crear =registro($_POST['cedula'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['clave']);
	header('location:index.php');
}
  ?>
  <!DOCTYPE html>
  <html>  <head>
  	<meta charset="utf-8">
  	<title>Registro</title>
  </head>  <body>
  <form method="post" >
  	<fieldset>
  		<legend>Ingreso de usuarios</legend>
  		<label>Ingrese su cedula</label><input type="text" name="cedula" required="" placeholder="cedula"><br>
  		<label>Ingrese  su nombre</label><input type="text" name="nombre" required="" placeholder="nombre"><br>
  		<label>Ingrese su dirección</label><input type="text" name="direccion" required="" placeholder="dirección"><br>
  		<label>Ingrese su teléfono</label><input type="text" name="telefono" required="" placeholder="teléfono"><br>
  		<label>Ingrese su contraseña</label><input type="text" name="clave" required="" placeholder="contraseña"><br>
  	</fieldset>
  	<input type="submit" name="enviar" value="Registrar">
  </form>
  </body>
  </html>
