<!DOCTYPE html>
<html lang="en">
<?php 
$urlNatif = URL.'club?';
$adresse = "http://".$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER["REQUEST_URI"];
$_SESSION['adresse'] = $adresse;
$newAdress = $_SESSION['adresse'];
$nbLeagueChara = strlen($newAdress) - strlen($urlNatif);
$leagueName = substr($newAdress, strlen($urlNatif), $nbLeagueChara);  
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= 'Ligue : ' . $leagueName ?></title>
    <link rel="icon" href="<?= URL ?>/assets/images/favicon.png">
    <link rel="stylesheet" href="<?= URL ?>/assets/styles/reset.min.css">
    <link rel="stylesheet" href="<?= URL ?>/assets/styles/style.min.css">
</head>

<?php require '../controllers/data/database.php'; ?>

<?php 
$prepare = $pdo->prepare('SELECT first_name FROM users WHERE id = :id ');
$prepare->bindValue('id', $_SESSION['id']);
$prepare->execute();
$userName = ucfirst($prepare->fetch()->first_name);
$urlAvatar = 'https://avatars.dicebear.com/v2/male/:'.$_SESSION['id'].'.svg'
?>

<body class="body">
  <header class="header">
    <nav class="nav">
      <div class="container--logo">
      <a class="link--logo" href="<?= URL ?>tableau"> 
        <img class="logo" src="assets/images/logo.png" alt="logo Alley oop">
      </a>
      </div>
      <div class="container--title">
        <h1 class="title"><?= $leagueName ?></h1>
      </div>
      <div class="container--profile">
        <p class="profile__name">Bonjour <?php echo($userName); ?></p>
        <a href="<?= URL ?>tableau">
          <div class="container--img">
            <img class="profile__img" src="<?= $urlAvatar ?>" alt="">
          </div>
        </a>
      </div>
    </nav>
  </header>