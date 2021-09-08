<?php
function conexion(){

	$servidor="localhost";
	$usuario="root";
	$clave="";
	$base="21215041_carrito";
	$conectar= mysqli_connect($servidor,$usuario,$clave,$base) or die("Erro de conexion");
	return $conectar;
  }
function ingresar($usu,$clave){
	$conectar=conexion();
	$query="select * from clientes where cli_cedula='$usu' and cli_clave='$clave' ";
	$enviar = mysqli_query($conectar,$query);
	$ver = mysqli_num_rows($enviar);
	return $ver;
}
function registro($cedula,$nombre,$direccion,$telefono,$clave){
$conectar=conexion();

$query="insert into clientes values(0,'$cedula','$nombre','$direccion','$telefono','$clave')";

$enviar=mysqli_query($conectar,$query);
return $enviar;
}
