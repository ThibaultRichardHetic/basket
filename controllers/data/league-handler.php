<?php 

// Error and success messages
$messages = [
'error' => [],
'success' => [],
];

if (!empty($_POST)) 
{

  //Get variables 
  $league_name = $_POST['league_name'];
  $friend_mail_1 = strtolower(trim($_POST['friend_mail_1']));
  $friend_mail_2 = strtolower(trim($_POST['friend_mail_2']));
  $friend_mail_3 = strtolower(trim($_POST['friend_mail_3']));
  $friend_mail_4 = strtolower(trim($_POST['friend_mail_4']));

  $add_mail_1 = false;
  $add_mail_2 = false;
  $add_mail_3 = false;
  $add_mail_4 = false;

  // Handler 
  $prepare = $pdo->prepare('SELECT mail FROM users WHERE users.id = :id');
  $prepare->bindValue('id', $_SESSION['id']);
  $prepare->execute();

  $myMail = $prepare->fetch()->mail;

  if ($myMail == $friend_mail_1 || $myMail == $friend_mail_2 || $myMail == $friend_mail_3 || $myMail == $friend_mail_4){
    $messages['error'][] = 'Vous ne pouvez pas ajouter votre propre mail… vous serez dans la ligue ne vous inquiétez pas !';
  }

  if (empty($league_name)) {
    $messages['error'][] = 'Il manque votre nom d équipe';
    $_POST['league_name'] = 'Il manque votre nom d équipe';
  }
  elseif (!empty($league_name))
  {
    foreach ($leagues as $_league) {
      if ($league_name === $_league->name) {
        $messages['error'][] = 'Le nom de l équipe existe déjà';
      }
    }
  }
  
  if (empty($friend_mail_1)) {
    $messages['error'][] = 'Il manque le mail de votre ami';
    $_POST['friend_mail_1'] = 'Il manque le mail de votre ami';
  }
  elseif (!empty($friend_mail_1)) {
    foreach ($users as $_user) {
      if ($friend_mail_1 === ($_user->mail)) {
        $add_mail_1 = true;
      }
    }
  }

  if (!empty($friend_mail_2)) {
    if ($friend_mail_2 == $friend_mail_1) {
      $messages['error'][] = 'Vous avez rentré deux fois le meme mail';
    }
    foreach ($users as $_user) {
      if ($friend_mail_2 === ($_user->mail)) {
        $add_mail_2 = true;
      }
    }
  }

  if (!empty($friend_mail_3)) {
    if (($friend_mail_3 == $friend_mail_1) || ($friend_mail_3 == $friend_mail_2)) {
      $messages['error'][] = 'Vous avez rentré deux fois le meme mail';
    }
    foreach ($users as $_user) {
      if ($friend_mail_3 === ($_user->mail)) {
        $add_mail_3 = true;
      }
    }
  }

  if (!empty($friend_mail_4)) {
    if (($friend_mail_4 == $friend_mail_1) || ($friend_mail_4 == $friend_mail_2) || ($friend_mail_4 == $friend_mail_3)) {
      $messages['error'][] = 'Vous avez rentré deux fois le meme mail';
    }
    foreach ($users as $_user) {
      if ($friend_mail_4 === ($_user->mail)) {
        $add_mail_4 = true;
      }
    }
  }

  // Success
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == false) && ($add_mail_3 == false) && ($add_mail_4 == false)) {

    $prepare = $pdo->prepare('INSERT INTO leagues (name) VALUES (:name)');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_1);
    $prepare->execute();

    $userId = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM leagues WHERE leagues.name = :name');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $leagueId = $prepare->fetch()->id;

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId);
    $prepare->execute();

    header('Location:../public/tableau');
    exit();
  }
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == true) && ($add_mail_3 == false) && ($add_mail_4 == false)) {

    $prepare = $pdo->prepare('INSERT INTO leagues (name) VALUES (:name)');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_1);
    $prepare->execute();

    $userId_1 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_2);
    $prepare->execute();

    $userId_2 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM leagues WHERE leagues.name = :name');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $leagueId = $prepare->fetch()->id;

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_1);
    $prepare->execute();

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_2);
    $prepare->execute();

    header('Location:../public/tableau');
    exit();
  }
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == true) && ($add_mail_3 == true) && ($add_mail_4 == false)) {

    $prepare = $pdo->prepare('INSERT INTO leagues (name) VALUES (:name)');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_1);
    $prepare->execute();

    $userId_1 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_2);
    $prepare->execute();

    $userId_2 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_3);
    $prepare->execute();

    $userId_3 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM leagues WHERE leagues.name = :name');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $leagueId = $prepare->fetch()->id;

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_1);
    $prepare->execute();

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_2);
    $prepare->execute();

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_3);
    $prepare->execute();

    header('Location:../public/tableau');
    exit();
  }
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == true) && ($add_mail_3 == true) && ($add_mail_4 == true)) {

    $prepare = $pdo->prepare('INSERT INTO leagues (name) VALUES (:name)');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_1);
    $prepare->execute();

    $userId_1 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_2);
    $prepare->execute();

    $userId_2 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_3);
    $prepare->execute();

    $userId_3 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_4);
    $prepare->execute();

    $userId_4 = $prepare->fetch()->id;

    $prepare = $pdo->prepare('SELECT id FROM leagues WHERE leagues.name = :name');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $leagueId = $prepare->fetch()->id;

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_1);
    $prepare->execute();

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_2);
    $prepare->execute();

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_3);
    $prepare->execute();

    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId_4);
    $prepare->execute();

    header('Location:../public/tableau');
    exit();
  }
}

// Form not sent 
else 
{
  $_POST['friend_mail_1'] = '';
  $_POST['friend_mail_2'] = '';
  $_POST['friend_mail_3'] = '';
  $_POST['friend_mail_4'] = '';
  $_POST['league_name'] = '';
}