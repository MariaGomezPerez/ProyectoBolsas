<!DOCTYPE html  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php
include_once '../conectar.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $mysqli = new mysqli($hotsdb,$usuariodb,$clavedb,$basededatos);
 $sql_query="DELETE FROM TiposProductos WHERE Id=".$_GET['delete_id'];
  $resultado=$mysqli->query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

//editar condition
?>
<html>
<head>
<title>Abarrotes - Tipos de productos</title>   
<link rel="shortcut icon" href="../favicon.png">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link href="../css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">
 <script type="text/javascript">
                function editar_id(id)
                {
                if(confirm('¿Desea modificar?'))
                {
            	   window.location.href='editarTipoProducto.php?edit_id='+id;
                }
                }
                function eliminar_id(id)
                {
                if(confirm('¿Desea eliminar?'))
                {
              	  window.location.href='VerTiposProductos.php?delete_id='+id;
                }
                }
     </script>	
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
        <section>
           <div >
                <table align="center" border="1">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>MARCA</th>
                    <th>COLOR</th>
                    <th>TIPODEMARERIAL</th>
                    <th>PAIS</th>
                   
                    <th colspan="2">OPERACIONES</th>
                </tr>
                <?php
                include_once '../conectar.php';
                    $mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
                if($mysqli -> connect_errno){
                    die("Error de conexion a MySQL: (".$mysqli -> mysqli_connect_errno().") ".$mysqli -> mysqli_connect_error());
                    
                }
                else
                {
                    $sql_query="SELECT * FROM TiposProductos";
                    $resultado=$mysqli -> query($sql_query);
                    while($row=$resultado->fetch_assoc())
                    {
                        ?>
                <tr>
            <td><?php echo $row["Id"]; ?></td>
            <td><?php echo $row["Nombre"]; ?></td>
            <td><?php echo $row["Marca"]; ?></td>
            <td><?php echo $row["Color"]; ?></td>
            <td><?php echo $row["TipodeMaterial"]; ?></td>
            <td><?php echo $row["Pais"]; ?></td>
            
    <!-- <td align="center"><a href="javascript:editar_id('<?php echo $row["Id"];?>')"><img src="../imagenes/editar1.png" width="50" height="50" align="EDIT"/></a></td>-->
     
    <td align="center"><a href="javascript:eliminar_id('<?php echo $row["Id"];?>')"><img src="../imagenes/cancelar.png" width="50" height="50" align="DELETE" /></a></td>
  
                    
                </tr>
                <?php
                    }
                }
                ?>
                
            </table>
            </div>
            <table>
            <tr>
            <th><p><a href="nuevoTipoProducto.php">Nuevo</a></p></th>
            <th><p><a href="editarTipoProducto.php">Editar</a></p></th>
            <th><p><a href="buscarTipoProducto.php">Buscar</a></p></th>
            </tr>
            </table>
        </section>
   
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
