<?php 

// Error and success messages
$messages = [
'error' => [],
'success' => [],
];

$a=array();
array_push($a,"blue","yellow");
print_r($a);


if (!empty($_POST)) 
{

  //Get variables 
  $league_name = $_POST['league_name'];
  $friend_name = $_POST['friend_name'];

  // Handler 
  if (empty($league_name)) {
    $messages['error'][] = 'Il manque votre nom d équipe';
    $_POST['league_name'] = 'Il manque votre nom d équipe';
  }

  if (empty($friend_name)) {
    $messages['error'][] = 'Il manque le mail de votre ami';
    $_POST['friend_name'] = 'Il manque le mail de votre ami';
  }





 
  echo '<pre>';
  print_r($_POST['friend_name']);
  echo '</pre>';
}

// Form not sent 
else 
{
  $_POST['friend_name'] = '';
  $_POST['league_name'] = '';
}