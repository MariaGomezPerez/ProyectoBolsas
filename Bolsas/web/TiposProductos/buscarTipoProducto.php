<?php
// AUTHOR: webreunidos.es

// Primero definimos la conexión a la base de datos
define('HOST_DB', 'localhost');  //Nombre del host, nomalmente localhost
define('USER_DB', 'root');       //Usuario de la bbdd
define('PASS_DB', 'maria_50_grey');           //Contraseña de la bbdd
define('NAME_DB', 'BolsasBD'); //Nombre de la bbdd

// Definimos la conexión
function conectar(){
	global $conexion;  //Definición global para poder utilizar en todo el contexto
	$conexion = mysql_connect(HOST_DB, USER_DB, PASS_DB)
	or die ('NO SE HA PODIDO CONECTAR AL MOTOR DE LA BASE DE DATOS');
	mysql_select_db(NAME_DB)
	or die ('NO SE ENCUENTRA LA BASE DE DATOS ' . NAME_DB);
}
function desconectar(){
	global $conexion;
	mysql_close($conexion);
}

//Variable que contendrá el resultado de la búsqueda
$texto = '';
//Variable que contendrá el número de resgistros encontrados
$registros = '';

if($_POST){
	
  $busqueda = trim($_POST['buscar']);

  $entero = 0;
  
  if (empty($busqueda)){
	  $texto = 'Búsqueda sin resultados';
  }else{
	  // Si hay información para buscar, abrimos la conexión
	  conectar();
      mysql_set_charset('utf8');  // mostramos la información en utf-8
	  
	  //Contulta para la base de datos, se utiliza un comparador LIKE para acceder a todo lo que contenga la cadena a buscar
	  $sql = "SELECT * FROM tiposproductos WHERE Nombre LIKE '%" .$busqueda. "%' ORDER BY Nombre";
	  
	  $resultado = mysql_query($sql); //Ejecución de la consulta
      //Si hay resultados...
	  if (mysql_num_rows($resultado) > 0){ 
	     // Se recoge el número de resultados
		 $registros = '<p>HEMOS ENCONTRADO ' . mysql_num_rows($resultado) . ' registros </p>';
	     // Se almacenan las cadenas de resultado
		 while($fila = mysql_fetch_assoc($resultado)){ 
              $texto .= $fila['Nombre'] . '<br />';
			 }
	  
	  }else{
			   $texto = "NO HAY RESULTADOS EN LA BBDD";	
	  }
	  // Cerramos la conexión (por seguridad, no dejar conexiones abiertas)
	  mysql_close($conexion);
  }
}
?>
<!DOCTYPE html  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

 <html>
<head>
<title>Buscador de Registro</title>   
<link rel="shortcut icon" href="../favicon.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link href="../css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">
</head>
    <body onLoad="MM_preloadImages('../imagenes/bannerbrcmedia.jpg','../imagenes/bannerbrcmedia2.jpg','../imagenes/bannerbrcmedia3.jpg','../imagenes/bannerbrcmedia4.jpg','../imagenes/contacto1.jpg','../imagenes/contacto2.jpg','../imagenes/fondo.jpg','../imagenes/fondotablacentro.jpg','../imagenes/laempresa1.jpg','../imagenes/laempresa2.jpg','../imagenes/productos1.jpg','../imagenes/productos2.jpg','../imagenes/servicios1.jpg','../imagenes/servicios2.jpg')">
       <div align="center">
  <div align="left">
<table width="955" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td height="26" valign="top"><p><a class="brcmedia" href="../index.html" title="Volver a la p&aacute;gina principal"><img src="../imagenes/home.gif" alt="Volver a la p&aacute;gina principal de brcmedia.com" width="11" height="10" border="0"></a> / <img src="../imagenes/mapaweb.gif" width="19" height="15" border="0" id="Image1">&nbsp;<a class="mbrocos" href="https://www.google.com/maps/d/viewer?mid=1VSoCXG66AGa5zbVdBbMZ7nPeMo4&hl=en_US&ll=16.707494000000004%2C-93.004077&z=17" title="Aviso Legal de BRCmedia" rel="nofollow">Mapa Web </a>/ <strong>&copy;</strong> Maria MGP. Telf: 555 001 050/ M&oacute;vil: 961 217 00 80</p></td>
  </tr>
    </table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><p><img src="../imagenes/bannerbrcmedia1.png"  width="955" height="147"></p></td>
      </tr>
    </table>
    <table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><p><img src="../imagenes/bannerbrcmedia2.jpg" width="314" height="52"><a href="../laempresa/laempresa.html"><img src="../imagenes/laempresa1.jpg" alt="La empresa" name="Image2" width="146" height="52" border="0" id="Image2" onMouseOver="MM_swapImage('Image2','','../imagenes/laempresa2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="servicios.html"><img src="../imagenes/servicios2.jpg" alt="Servicios" name="Image3" width="146" height="52" border="0" id="Image3" onMouseOver="MM_swapImage('Image3','','../imagenes/servicios2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../productos/productos.html"><img src="../imagenes/productos1.jpg" alt="Productos" name="Image4" width="146" height="52" border="0" id="Image4" onMouseOver="MM_swapImage('Image4','','../imagenes/productos2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../contacto/contacto.html"><img src="../imagenes/contacto1.jpg" alt="Contacto" name="Image5" width="148" height="52" border="0" id="Image5" onMouseOver="MM_swapImage('Image5','','../imagenes/contacto2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><img src="../imagenes/bannerbrcmedia3.jpg" alt="Bolsas" width="55" height="52"></p></td>
      </tr>
    </table>
       <table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td><img src="../imagenes/bannerbrcmedia4.jpg" alt="" width="955" height="88"></td>
      </tr>
    </table>
    <table class="tablacentro" width="955" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="18"><p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
        <td><table width="915" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="266" valign="top">&nbsp;<br>
                  <table width="260" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><p>&nbsp;</p>
                          <p>&nbsp;</p></td>
                    </tr>
                </table>
                </td>
              <td width="649" align="center" valign="top"><table width="615" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><p><br>
                        <img src="../imagenes/titservicios.jpg" width="599" height="30"></p>
<h1>Ejemplo de buscador:</h1> 
<form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
    <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
    <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
</form>
<?php 
// Resultado, número de registros y contenido.
echo $registros;
echo $texto; 
?>
<br>
<a href="VerTiposProductos.php" target="_self">Volver</a>


 
   
                        <p>&nbsp;</p>
                      <p>&nbsp;</p></td>
                  </tr>
                </table>
                  <p>&nbsp;</p>
                <table width="615" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td><p align="right">&nbsp;</p>
                          <p align="right">&nbsp;</p>
                        <p align="right"><img src="../imagenes/separacion.jpg"  width="615" height="18"><br>
                            <a href="#"><img src="../imagenes/logopeqinf.jpg"  width="104" height="39" border="0"></a></p>
                        <p align="right"><br>
                        </p></td>
                    </tr>
                </table></td>
            </tr>
        </table></td>
        <td width="22"><p>&nbsp;</p>
            <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p>&nbsp;</p></td>
      </tr>
    </table>
    </div>
</div>
    </body>
</html>
