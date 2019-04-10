<?php

// Configuration 
  define('URL', 'http://localhost:8888/cours/basket/public/');

session_start();


// GET 'q' param
$q = empty($_GET['q']) ? '' : $_GET['q'];


// Define controller 
$controller = '404';

if($q == 'connexion')
{
  $controller = 'connexion';
}
else if($q == 'ligue')
{
  $controller = 'league';
}
else if($q == 'tableau')
{
  $controller = 'board';
}
else if ($q == '') {
  $controller = 'home';
}

// Include controller
include '../controllers/'.$controller.'.php';