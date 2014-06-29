<?php
session_name("fancyform");
session_start();

/*
$_SESSION['n1'] = rand(1,5);
$_SESSION['n2'] = rand(1,5);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];
*/

$str='';
if(isset($_SESSION['errStr']))
{
  $str='<div class="error">'.$_SESSION['errStr'].'</div>';
  unset($_SESSION['errStr']);
}


$success='';
if(isset($_SESSION['sent']))
{
  $success='<h1>Gracias</h1>';
  
  $css='<style type="text/css">#contact-form{display:none;}</style>';
  
  unset($_SESSION['sent']);
}
?>
<?//=$css?>
<?php
  //Initialize vars
  $_SESSION['post']['name'] = "";
  $_SESSION['post']['email'] = "";
  $_SESSION['post']['message'] = "";
