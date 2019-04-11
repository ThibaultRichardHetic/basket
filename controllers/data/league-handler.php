<?php 

// Error and success messages
$messages = [
'error' => [],
'success' => [],
];

$newUsers = array();
array_push($newUsers,"blue","yellow");
print_r($newUsers);


if (!empty($_POST)) 
{

  //Get variables 
  $league_name = $_POST['league_name'];
  $friend_name_1 = $_POST['friend_name_1'];

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