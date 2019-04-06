<?php

//Var
  const linkImage = "http://www.tieffeu.com/wp-content/uploads/2019/03/noImg.png";
  const linkImage404 = "http://www.tieffeu.com/wp-content/uploads/2019/03/noImg2.jpg";
  const hook1 = "[salta]";

function autoload($class) {
    $cartelle = array(
          dirname(__FILE__).'/'
    );

    foreach($cartelle as $cartella) {
      if (file_exists($cartella.$class . '.php')) {
          include_once $cartella.$class . '.php'; 
        } 
    }
}

spl_autoload_register('autoload');