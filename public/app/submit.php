<?php

require "./libs/phpmailer/class.phpmailer.php";
require "config.php";

session_name("fancyform");
session_start();


foreach($_POST as $k=>$v)
{
	if(ini_get('magic_quotes_gpc'))
	$_POST[$k]=stripslashes($_POST[$k]);
	
	$_POST[$k]=htmlspecialchars(strip_tags($_POST[$k]));
}


$err = array();

if(!checkLen('name'))
	$err[]='El nombre es demasiado corto o no fué ingresado';

if(!checkLen('email'))
	$err[]='La dirección de correo electrónico está vacía o incompleta';

else if(!checkEmail($_POST['email']))
	$err[]='La dirección de correo electrónico no es válida';
/*
if(!checkLen('subject'))
	$err[]='You have not selected a subject!';
*/
if(!checkLen('message'))
	$err[]='El contenido del mensaje es demasiado corto';
/*
if((int)$_POST['captcha'] != $_SESSION['expect'])
	$err[]='La suma es incorrecta';
*/

if(count($err))
{
	if($_POST['ajax'])
	{
		echo '-1';
	}

	else if($_SERVER['HTTP_REFERER'])
	{
		$_SESSION['errStr'] = implode('<br />',$err);
		$_SESSION['post']=$_POST;
		
		header('Location: '.$_SERVER['HTTP_REFERER']);
	}

	exit;
}

// Load Body mail
require "msj-view.php";



$mail = new PHPMailer();
$mail->IsMail();

$mail->AddReplyTo($_POST['email'], $_POST['name']);
$mail->AddAddress($emailAddress);
$mail->SetFrom($_POST['email'], $_POST['name']);
$mail->Subject = "Nuevo mensaje de  ".$_POST['name']." | " . $webSiteName;

$mail->MsgHTML($msg);

$mail->Send();


unset($_SESSION['post']);

if($_POST['ajax'])
{
	echo '1';
}
else
{
	$_SESSION['sent']=1;
	
	if($_SERVER['HTTP_REFERER'])
		header('Location: '.$_SERVER['HTTP_REFERER']);
	
	exit;
}

function checkLen($str,$len=2)
{
	return isset($_POST[$str]) && mb_strlen(strip_tags($_POST[$str]),"utf-8") > $len;
}

function checkEmail($str)
{
	return preg_match("/^[\.A-z0-9_\-\+]+[@][A-z0-9_\-]+([.][A-z0-9_\-]+)+[A-z]{1,4}$/", $str);
}

?>
