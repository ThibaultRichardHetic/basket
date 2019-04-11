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
  $friend_mail_1 = $_POST['friend_mail_1'];
  $friend_mail_2 = $_POST['friend_mail_2'];
  $friend_mail_3 = $_POST['friend_mail_3'];
  $friend_mail_4 = $_POST['friend_mail_4'];

  $add_mail_1 = false;
  $add_mail_2 = false;
  $add_mail_3 = false;
  $add_mail_4 = false;


  // Handler 
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
    foreach ($users as $_user) {
      if ($friend_mail_2 === ($_user->mail)) {
        $add_mail_2 = true;
      }
    }
  }

  if (!empty($friend_mail_3)) {
    foreach ($users as $_user) {
      if ($friend_mail_3 === ($_user->mail)) {
        $add_mail_3 = true;
      }
    }
  }

  if (!empty($friend_mail_4)) {
    foreach ($users as $_user) {
      if ($friend_mail_4 === ($_user->mail)) {
        $add_mail_4 = true;
      }
    }
  }

  // Success
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == false) && ($add_mail_3 == false) && ($add_mail_4 == false)) {

    echo '<pre>';
    print_r($friend_mail_1);
    echo '</pre>';
    echo('ta mere');

    $prepare = $pdo->prepare('INSERT INTO leagues (name) VALUES (:name)');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $prepare = $pdo->prepare('SELECT id FROM users WHERE users.mail = :mail');
    $prepare->bindValue('mail', $friend_mail_1);
    $prepare->execute();

    $userId = $prepare->fetch()->id;

    echo '<pre>';
    print_r($userId);
    echo '</pre>';

    $prepare = $pdo->prepare('SELECT id FROM leagues WHERE leagues.name = :name');
    $prepare->bindValue('name', $league_name);
    $prepare->execute();

    $leagueId = $prepare->fetch()->id;

    echo '<pre>';
    print_r($leagueId);
    echo '</pre>';


    $prepare = $pdo->prepare('INSERT INTO league_users (id_league, id_user) VALUES (:league, :user)');
    $prepare->bindValue('league', $leagueId);
    $prepare->bindValue('user', $userId);
    $prepare->execute();


    
  }
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == true) && ($add_mail_3 == false) && ($add_mail_4 == false)) {

    echo '<pre>';
    print_r($friend_mail_1);
    echo '</pre>';
    echo '<pre>';
    print_r($friend_mail_2);
    echo '</pre>';

    echo('ton père');
    
  }
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == true) && ($add_mail_3 == true) && ($add_mail_4 == false)) {

    echo '<pre>';
    print_r($friend_mail_1);
    echo '</pre>';
    echo '<pre>';
    print_r($friend_mail_2);
    echo '</pre>';
    echo '<pre>';
    print_r($friend_mail_3);
    echo '</pre>';
    
    echo('ta soeur');
  }
  if ((empty($messages['error'])) && ($add_mail_1 == true) && ($add_mail_2 == true) && ($add_mail_3 == true) && ($add_mail_4 == true)) {

    echo '<pre>';
    print_r($friend_mail_1);
    echo '</pre>';
    echo '<pre>';
    print_r($friend_mail_2);
    echo '</pre>';
    echo '<pre>';
    print_r($friend_mail_3);
    echo '</pre>';
    echo '<pre>';
    print_r($friend_mail_4);
    echo '</pre>';
    
    echo('ton frère');

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