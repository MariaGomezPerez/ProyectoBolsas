<?  
ini_set('display_errors','0');
include_once("class.phpmailer.php");
$nombre = $_REQUEST['nombre'];
/******************************************************
**
**   Flash Mx PHP Mail
**
** Por - Martín Brocos BRCmedia.com
*******************************************************/

// Correo electrónico de su empresa
$adminaddress = "beni-13@hotmail.com.com"; 

// Dirección de su web incluido http://www. 
$siteaddress ="http://www.diamante.com"; 

// Nombre de su empresa 
$sitename = "Diamante.com"; 

/*******************************************************/

$date = date("m/d/Y H:i:s");

if ($_SERVER['REMOTE_ADDR'] == "") 
	$ip = "no ip";
else 
	$ip = getHostByAddr($_SERVER['REMOTE_ADDR']);


if ($_POST['enviar'] != ""){  
	// Mail al administrador...
	$mail = new PHPMailer();
	$mail->From     = $adminaddress;
	$mail->FromName = $sitename;
	$mail->AddAddress($adminaddress);
	$mail->AddReplyTo($adminaddress);
	$mail->IsHTML(true);                               // send as HTML
	$mail->Subject  =  "Solicitud de información";
	$mail->Body  = 	"<font color=\"#333333\" size=\"2\" face=\"Arial, Helvetica, sans-serif\"><b>Solicitud de información:</b><br>
------------------------------<br>
Nombre: <font color=\"#FF0000\">".$_POST['nombre']."</font><br>
Empresa: <font color=\"#FF0000\">".$_POST['empresa']."</font><br>
CIF/NIF: <font color=\"#FF0000\">".$_POST['cifnif']."</font><br>
Dirección: <font color=\"#FF0000\">".$_POST['direccion']."</font><br>
Localidad: <font color=\"#FF0000\">".$_POST['localidad']."</font><br>
CP: <font color=\"#FF0000\">".$_POST['cp']."</font><br>
Provincia: <font color=\"#FF0000\">".$_POST['provincia']."</font><br>
País: <font color=\"#FF0000\">".$_POST['pais']."</font><br>
Teléfono: <font color=\"#FF0000\">".$_POST['telefono']."</font><br>
Email: <font color=\"#FF0000\">".$_POST['email']."</font><br>
Web: <font color=\"#FF0000\">".$_POST['url']."</font><br>
Comentarios:<br>".$_POST['comentarios']."<br>
<br>------------------------------<br>
<b>Otros datos del usuario:</b><br>
------------------------------<br>
Navegador: <font color=\"#FF0000\">".$_SERVER['HTTP_USER_AGENT']."</font><br>
Hostname: <font color=\"#FF0000\">".$ip."</font><br>
IP address: <font color=\"#FF0000\">".$_SERVER['REMOTE_ADDR']."</font><br>
Fecha/Hora: <font color=\"#FF0000\">".$date."</font></font><br><br>"; 
$mail->Send();
	
	// Mail al usuario...
    $mail = new PHPMailer();
	$mail->From     = $adminaddress;
	$mail->FromName = $sitename;
	$mail->AddAddress($_POST['email']);
	$mail->AddReplyTo($adminaddress);
	$mail->IsHTML(true);                               // send as HTML
	$mail->Subject  =  "Información ".$sitename;
	$mail->Body  =  "<font color=\"#333333\" size=\"2\" face=\"Arial, Helvetica, sans-serif\">Estimado/a <font color=\"#FF0000\">".$_POST['nombre']."</font>, hemos recibido su consulta en <font color=\"#FF0000\">".$sitename."</font><br><br>
Nos pondremos en contacto con usted a la mayor brevedad posible<br><br>
Reciba un cordial saludo,<br>
<font color=\"#FF0000\">".$sitename."</font><br>
<a href=\"mailto:info@brcmedia.com\">".$adminaddress."<br>
<a href=\"http://www.brcmedia.com\">".$siteaddress."</a><br><br></font>"; 
$mail->Send();
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Contactar con brcmedia.com</title>
<link rel="shortcut icon" href="../favicon.png">
<meta name="description" >

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<link href="../css_scripts/02.css" rel="stylesheet" rev="stylesheet" type="text/css">

</head>
<body onLoad="MM_preloadImages('../imagenes/bannerbrcmedia.jpg','../imagenes/bannerbrcmedia2.jpg','../imagenes/bannerbrcmedia3.jpg','../imagenes/bannerbrcmedia4.jpg','../imagenes/contacto1.jpg','../imagenes/contacto2.jpg','../imagenes/fondo.jpg','../imagenes/fondotablacentro.jpg','../imagenes/laempresa1.jpg','../imagenes/laempresa2.jpg','../imagenes/productos1.jpg','../imagenes/productos2.jpg','../imagenes/servicios1.jpg','../imagenes/servicios2.jpg')">
<table width="955" border="0" align="center" cellpadding="4" cellspacing="0">
  <tr>
    <td height="26" valign="top"><p><a class="brcmedia" href="../index.html" title="Volver a la p&aacute;gina principal"><img src="../imagenes/home.gif" alt="Volver a la p&aacute;gina principal de brcmedia.com" width="11" height="10" border="0"></a> / <img src="../imagenes/mapaweb.gif" width="19" height="15" border="0" id="Image1">&nbsp;<a class="mbrocos" href="https://www.google.com/maps/d/viewer?mid=1VSoCXG66AGa5zbVdBbMZ7nPeMo4&hl=en_US&ll=16.707494000000004%2C-93.004077&z=17" title="Aviso Legal de BRCmedia" rel="nofollow">Mapa Web </a>/ <strong>&copy;</strong> Maria MGP. Telf: 555 001 050/ M&oacute;vil: 961 217 00 80</p></td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p><img src="../imagenes/bannerbrcmedia1.png" width="955" height="147"></p></td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><p><img src="../imagenes/bannerbrcmedia2.jpg"  width="314" height="52"><a href="../laempresa/laempresa.html"><img src="../imagenes/laempresa1.jpg" alt="La empresa " name="Image2" width="146" height="52" border="0" id="Image2" onMouseOver="MM_swapImage('Image2','','../imagenes/laempresa2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../servicios/servicios.html"><img src="../imagenes/servicios1.jpg" alt="Servicios " name="Image3" width="146" height="52" border="0" id="Image3" onMouseOver="MM_swapImage('Image3','','../imagenes/servicios2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="../productos/productos.html"><img src="../imagenes/productos1.jpg" alt="Productos " name="Image4" width="146" height="52" border="0" id="Image4" onMouseOver="MM_swapImage('Image4','','../imagenes/productos2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><a href="contacto.html"><img src="../imagenes/contacto2.jpg" alt="Contacto " name="Image5" width="148" height="52" border="0" id="Image5" onMouseOver="MM_swapImage('Image5','','../imagenes/contacto2.jpg',1)" onMouseOut="MM_swapImgRestore()"></a><img src="../imagenes/bannerbrcmedia3.jpg" awidth="55" height="52"></p></td>
  </tr>
</table>
<table width="955" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><img src="../imagenes/bannerbrcmedia4.jpg"  width="955" height="88"></td>
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
            <td><p>&nbsp;<br>
                    <img src="../imagenes/titcontacto.jpg"  width="599" height="30"></p>
                <p> Estimado/a: <font color="#6CFFFF" ><strong><?php echo $nombre; ?></strong></font> </p>
              <p>El 
                formulario ha sido enviado correctamente. 
                En breve nos pondremos en contacto con usted.</font></p>
              <p align="left"><font color="#6CFFFF"><strong>Muchas 
                gracias</strong></font></p></td>
          </tr>
        </table>
          <table width="615" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td><p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right">&nbsp;</p>
                <p align="right"><img src="../imagenes/separacion.jpg" awidth="615" height="18"><br>
                  <a href="#"><img src="../imagenes/logopeqinf.jpg" width="104" height="39" border="0"></a><br>
                  </p></td>
            </tr>
          </table>
          <p>&nbsp;</p></td>
      </tr>
    </table>
    </td>
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
</body>
</html>