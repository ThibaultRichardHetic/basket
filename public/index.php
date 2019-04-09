<?php

// Configuration 
  define('URL', 'http://localhost:8888/cours/basket/public/');

// GET 'q' param
$q = empty($_GET['q']) ? '' : $_GET['q'];


// Define controller 
$controller = '404';

if($q == 'connexion')
{
  $controller = 'connexion';
}
else if ($q == '') {
  $controller = 'home';
}
else if (preg_match('/^article\/[1-9][0-9]*$/', $q))
{
  $controller = 'article';
}

// Include controller
include '../controllers/'.$controller.'.php';