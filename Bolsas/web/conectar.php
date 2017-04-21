<?php
//parametros
$hostdb="localhost"; //nombre servidor
$usuariodb="root"; //nombre del usuario
$clavedb="maria_50_grey"; //contraseña del usuario
$basededatos="BolsasBD";  //nombre de la BD

$tabla1="TiposProductos";    // sera el valor de la tabla tipos de productos
$tabla2="Productos"; 
$tabla3="Clientes"; 
$tabla4="Proveedores"; 
// Fin de los parametros a configurar para la conexion de la base de datos 

//cadena de conexion completa
$cadenaConexion=mysql_connect("$hostdb","$usuariodb","$clavedb","$basededatos");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Falló la conexion a MySQL: " . mysqli_connect_error();
  }
?>