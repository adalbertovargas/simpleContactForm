<?php

/**
 * Configuration
 *
 * filename=config.php
 */


  /*| SIMPLE CONTACT FORM
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
    |===================================================*/


/**
 * E-mail adress and website host configuration.
 * 
 * $emailAddress: email adress, eg: adalbertovargasmoreno@gmail.com
 * $webSiteName: Site's name, eg: adalbertoVargas.com 
 */

$emailAddress = 'adalbertovargasmoreno@gmail.com';
$webSiteName = 'adalbertoVargas.com';


/**
 * Debbuger helper
 *
 * Choose between showing or not debbuger helper
 * Set TRUE: Show debugger, FALSE: Not swow debugger.
 */

$showHelpers = FALSE;   
    
// Do not modify. Include kint lib
$showHelpers == TRUE ? require ('libs/kint/kint-0.9/Kint.class.php'): define('PATCH', FALSE);
  
/* config end */
