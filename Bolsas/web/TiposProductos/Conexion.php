<?php
//haremos uso de esta función cada ves que deseamos conectarnos a la base de datos.
function conectar(){
$user="root";//usuario de base de datos
$pass="maria_50_grey";//contraseña de acceso a base de datos
$server="localhost"; // Nombre del servidor
$db="BolsasBD"; // Nombre de la Base de datos
$con=mysql_connect($server,$user,$pass) or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db($db,$con) or die ('No se pudo conectar a la base de datos: '.mysql_error());
return $con;
}
?>