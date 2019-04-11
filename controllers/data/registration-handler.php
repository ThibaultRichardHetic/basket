<?php 

// Error and success messages
$messages = [
  'error' => [],
  'success' => [],
];


// 
if(!empty($_POST) && isset($_POST['register_submit']))
{

  // Get variable
  $first_name = trim($_POST['first_name']);
  $last_name = trim($_POST['last_name']);
  $team_name = trim($_POST['team_name']);
  $mail = trim($_POST['mail']);
  $password = sha1($_POST['password']);
  $password_confirmation = sha1($_POST['password_confirmation']);

  // Handle errors 
  if(empty($first_name))
  {
    $messages['error'][] = 'Il manque votre prénom';
    $_POST['first_name'] = 'Il manque votre prénom';
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
  elseif (!empty($mail)) {
    foreach ($users as $_user) {
      if ($mail === ($_user->mail)) {
        $messages['error'][] = "Cette adresse mail est déjà utilisée";
      }
    }
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

  if ( (!empty($password) && !empty($password_confirmation)) && ($password !== $password_confirmation) ) 
  {
    $messages['error'][] = "Vérification du mot de passe invalide";
  }

  // Success
  if((empty($messages['error'])) && ( (!empty($password) && !empty($password_confirmation)) && ($password === $password_confirmation)))
  {
    $prepare = $pdo->prepare('INSERT INTO users (first_name, last_name, team_name, mail, password) VALUES (:first_name, :last_name, :team_name, :mail, :password)');

    $prepare->bindValue('first_name', $first_name);
    $prepare->bindValue('last_name', $last_name);
    $prepare->bindValue('team_name', $team_name);
    $prepare->bindValue('mail', $mail);
    $prepare->bindValue('password', $password);

    $prepare->execute();

    $messages['success'][] = 'Vous êtes bien enregistré(e)';

    $mail_user = $mail;
    global $mail_user;

    $_POST['first_name'] = '';
    $_POST['last_name'] = '';
    $_POST['team_name'] = '';
    $_POST['mail'] = '';
    $_POST['password'] = '';
    $_POST['password_confirmation'] = '';
  }
}

if (!empty($_POST) && isset($_POST['connexion_submit'])) {


  // Get variable
  $connexion_mail = trim($_POST['connexion_mail']);
  $connexion_password = sha1($_POST['connexion_password']);

  // Handle errors 
  if(empty($connexion_mail))
  {
    $messages['error'][] = 'Il manque votre mail utilisateur';
  }
  
  if(empty($connexion_password))
  {
    $messages['error'][] = 'Il manque votre mot de passe';
  }

  // Success
  if ( (empty($messages['error'])) ) {

    
    foreach ($users as $_user) {
      if ( ($connexion_mail === ($_user->mail)) && ($connexion_password === ($_user->password)) ) {
        $messages['success'][] = "vous pouvez rentrer";
        $_SESSION['id'] = $_user->id;
        $_SESSION['mail'] = $_user->mail;
        header('Location:../public/tableau');
        exit();
      }
    }

    if (empty($messages['success'])) {
      $messages['error'][] = 'L adresse email ou le mot de passe est incorrect';

      $_POST['first_name'] = '';
      $_POST['last_name'] = '';
      $_POST['team_name'] = '';
      $_POST['mail'] = '';
      $_POST['password'] = '';
      $_POST['password_confirmation'] = '';
    }
    
    else
    {
      $_POST['first_name'] = '';
      $_POST['last_name'] = '';
      $_POST['team_name'] = '';
      $_POST['mail'] = '';
      $_POST['password'] = '';
      $_POST['password_confirmation'] = '';
    }
  }

  else
  {
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

  $_POST['connexion_mail'] = '';
  $_POST['connexion_password'] = '';
}