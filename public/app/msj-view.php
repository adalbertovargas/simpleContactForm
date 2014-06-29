<?php

$msg='
<!--Message starts-->
<table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="#f7f9fc">
<tbody>
<tr>
<td height="30">&nbsp;</td>
</tr>
<tr>
<td align="center">
<table border="0" cellspacing="0" cellpadding="0" width="600" bgcolor="#eeeeee">
<tbody>
<tr>
<td width="13" height="30">&nbsp;</td>
<td align="left" valign="bottom"><span style="font-size: medium;">Nuevo mensaje desde sitio web '.$webSiteName.'</span></span></td>
<td width="14">&nbsp;</td>
</tr>
</tbody>
</table>
<table border="0" cellspacing="0" cellpadding="0" width="600" bgcolor="#eeeeee">
<tbody>
<tr>
<td width="4">&nbsp;</td>
<td align="center" bgcolor="#FFFFFF">
<table border="0" cellspacing="0" cellpadding="5" width="100%">
<tbody>

<tr>
	<td style=" padding: 5px !important;" width="170" bgcolor="#f9f9f9"><strong>Pregunta</strong></td>
	<td style=" padding: 5px !important;" bgcolor="#f9f9f9"><strong>Respuesta</strong></td>
</tr>

<!--Injector work starts-->
<tr>
	<td style="padding: 5px !important;" width="170" bgcolor="white">Nombre</td>
	<td id="ans0" style="padding: 5px !important;" bgcolor="white">'.$_POST['name'].'</td>
</tr>
<tr>
	<td style="padding: 5px !important;" width="170" bgcolor="#f9f9f9">E-Mail</td>
	<td id="ans1" style="padding: 5px !important;" bgcolor="#f9f9f9">'.$_POST['email'].'</td>
</tr>
<tr>
	<td style="padding: 5px !important;" width="170" bgcolor="white">IP</td>
	<td id="ans2" style="padding: 5px !important;" bgcolor="white">'.$_SERVER['REMOTE_ADDR'].'</td>
</tr>
<tr>
	<td style="padding: 5px !important;" width="170" bgcolor="#f9f9f9">Mensaje</td>
	<td id="ans2" style="padding: 5px !important;" bgcolor="#f9f9f9">'.nl2br($_POST['message']).'</td>
</tr>
<!--Injector work ends-->
</tbody>
</table>
</td>
<td width="4" >&nbsp;</td>
</tr>
<tr>
<td style="font-size: 4px;" height="4" >&nbsp;</td>
<td style="font-size: 4px;" >&nbsp;</td>
<td style="font-size: 4px;" >&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="text-align: center;" height="30">&nbsp;<a href="http://www.adlnetworks.com/" target="_blank">ADL NETWORKS</a></td>
</tr>
</tbody>
</table>
<p><br /><br /></p>
<p>&nbsp;</p>
<!--Message Ends-->
--';

//	Uncoment for viewing message.	
//	echo $msg;
