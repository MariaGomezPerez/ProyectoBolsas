<?php 

include_once '../conectar.php';

$id= @$_POST['Id']; 
$nombre = @$_POST['Nombre']; 
$marca= @$_POST['Marca']; 
$color = @$_POST['Color']; 
$tipodematerial= @$_POST['TipodeMaterial']; 
$pais = @$_POST['Pais']; 
 
$sql = "UPDATE `tiposproductos` SET `id`='$id',`name`='$nombre',`mar`='$marca',`col`='$color',`tdm`='$tipodematerial',`p`='$pais' WHERE `id`='$id'"; 
if (mysql_query($sql)) { 
echo "Actualización exitosa "; 
} else { 
echo "Error de actualizacion "; 
} 
echo 'id ' . $_POST['Id'] . ', ' . $_POST['Nombre'] .', ' . $_POST['Marca'] .', ' . $_POST['Color'].', ' . $_POST['TipodeMaterial'].', ' . $_POST['Pais'].'<br /><br />'; 
mysql_close($conexion);
?> 
<a href="editarTipoProducto.php" target="_self">Volver</a>