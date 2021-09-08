<?php
include("funciones.php");
session_start();
$conect=conexion();
if (isset($_POST['enviar'])) {
	$usuario=$_POST['usuario1'];
	$clave=$_POST['clave1'];
	$validar= ingresar($usuario,$clave);
	if ($validar>0) {
		$_SESSION['usuario']= $usuario;
		$query="select * from clientes where cli_cedula='$usuario' and cli_clave='$clave'";
		$enviarC=mysqli_query($conect,$query);
		$ver = mysqli_fetch_array($enviarC);
		$_SESSION['id']=$ver['cli_id'];
		$_SESSION['nombre']= $ver['cli_nombre'];
		header('location:pagina.php');
	}else{
		echo '<script> alert("Error");  </script>';
	}
}
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<title>Formulario</title>
  </head>
  <body>
  <form method="post" >
  	<fieldset>
  		<legend>Formulario</legend>
  		<label>Ingrese su cedula</label>
  		<input type="text" placeholder="Ingrese su cedula" name="usuario1"><br>
  		<label>Ingrese la contraseña</label>
  		<input type="text" placeholder="Ingrese su contraseña" name="clave1"><br>
  		<input type="submit" name="enviar" name="Ingresar">
  		<br>
  		<input type="button" onclick="ir()" value="Registrar">
  	</fieldset>
  </form>
  </body>
  </html>
<script type="text/javascript">
	function ir() {
		window.location="registro.php";
	}
</script>
