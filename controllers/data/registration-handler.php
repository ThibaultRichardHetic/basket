<?php 

// Error and success messages
$messages = [
    'error' => [],
    'success' => [],
];

// 
if(!empty($_POST))
{

  // Get variable
  $first_name = trim($_POST['first_name']);
  $last_name = trim($_POST['last_name']);
  $team_name = trim($_POST['team_name']);
  $mail = trim($_POST['mail']);
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];

  // Handle errors 
  if(empty($first_name))
  {
      $messages['error'][] = 'Il manque votre prénom';
  }
  if(empty($last_name))
  {
      $messages['error'][] = 'Il manque votre nom';
  }
  if(empty($team_name))
  {
      $messages['error'][] = "Il manque votre nom d'équipe";
  }
  if(empty($mail))
  {
      $messages['error'][] = "Il manque votre adresse mail";
  }
  if(empty($password))
  {
      $messages['error'][] = 'Mot de passe manquant';
  }
  elseif (strlen($password) < 5) 
  {
      $messages['error'][] = 'Votre mot de passe est trop court';
  }
  if(empty($password_confirmation))
  {
      $messages['error'][] = "Votre confirmation de mot de passe est vide";
  }

  if( (!empty($password) && !empty($password_confirmation)) && ($password === $password_confirmation) )
  {
    $messages['success'][] = 'Mot de passe identique a la vérification';
  }

  if ( (!empty($password) && !empty($password_confirmation)) && ($password !== $password_confirmation) ) 
  {
    $messages['error'][] = "Vérification du mot de passe invalide";
  }


  // Success
  if(empty($messages['error']))
  {
    $prepare = $pdo->prepare('INSERT INTO users (first_name, last_name, team_name, mail, password) VALUES (:first_name, :last_name, :team_name, :mail, :password)');

    $prepare->bindValue('first_name', $first_name);
    $prepare->bindValue('last_name', $last_name);
    $prepare->bindValue('team_name', $team_name);
    $prepare->bindValue('mail', $mail);
    $prepare->bindValue('password', $password);

    $prepare->execute();

    $messages['success'][] = 'Vous êtes bien enregistré(e)';

    $_POST['first_name'] = '';
    $_POST['last_name'] = '';
    $_POST['team_name'] = '';
    $_POST['mail'] = '';
    $_POST['password'] = '';
    $_POST['password_confirmation'] = '';
  }
}

// Form not sent 
else 
{
  $_POST['first_name'] = '';
  $_POST['last_name'] = '';
  $_POST['team_name'] = '';
  $_POST['mail'] = '';
  $_POST['password'] = '';
  $_POST['password_confirmation'] = '';
}