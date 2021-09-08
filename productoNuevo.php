<?php

include("funciones.php");
$conectar = conexion();
$image = $_FILES['archivo']['tmp_name'];
$imgContenido= addslashes(file_get_contents($image));
$query= "insert into productos values (0, '$_POST[cantidad]','$_POST[nombre]','$_POST[descripcion]','$_POST[precio]','".$imgContenido."')";
$enviar = mysqli_query($conectar,$query);
header('location:NuevoProducto.php');
  ?>
