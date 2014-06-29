
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!--| SIMPLE CONTACT FORM
    |
    | HIRE ME. I'm available for freelance work.
    | 
    | CONTRÁTAME.
    | Estoy disponible para trabajos por proyecto.
    |
    | Coder: Adalberto Vargas
    | adalbertoVargas.com
    | contacto@adalbertovargas.com
    |
    | Copyright 2014 ADL NETWORKS
    | Code Licensed under MIT.
    | Totally free for private or commercial projects: 
    | github.com/adalbertovargas/simpleContactForm
    |
    | adlnetworks.com
    | info@adlnetworks.com
    |===================================================-->


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contácto</title>

<link rel="stylesheet" type="text/css" href="./assets/plugins/jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="./assets/plugins/formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="./assets/demo.css" />

</head>

<body>

<div id="main-container">

  <div id="form-container">
    <h1>CONTACTO</h1>
    <h2>Solicite informes sin compromiso.</h2>
    
    <form id="contact-form" name="contact-form" method="post" action="app/submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%"><label for="name">Nombre</label></td>
          <td width="60%"><input type="text" size="19" placeholder="Ej. Humberto Robina" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="text" size="19" placeholder="Ej. humberto69@hotmail.com" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
          <td>&nbsp;</td>
        </tr>
<!--
        <tr>
          <td><label for="subject">Subject</label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - Choose -</option>
            <option value="Question">Question</option>
            <option value="Business proposal">Business proposal</option>
            <option value="Advertisement">Advertising</option>
            <option value="Complaint">Complaint</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
-->
        <tr>
          <td valign="top"><label for="message">Mensaje</label></td>
          <td><textarea name="message"  placeholder="Ej. Estoy interesado en... pero tengo una duda..." id="message" class="validate[required]" cols="35" rows="8"><?=$_SESSION['post']['message']?></textarea></td>
          <td valign="top">&nbsp;</td>
        </tr>
<!--       
        <tr>
          <td><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          <td valign="top">&nbsp;</td>
        </tr>
-->
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Enviar" />
      <!--    
          <input type="reset" name="button2" id="button2" value="Reset" />
      -->    
          <?=$str?>
          <img id="loading" src="./assets/img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div>
  <div class="tutorial-info"> 
  Recibirá respuesta vía correo electrónico.
  </div>

</div>

<!--
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
-->
<script type="text/javascript" src="./assets/lib/jquery/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="./assets/plugins/jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="./assets/plugins/formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="./assets/script.js"></script>
</body>
</html>