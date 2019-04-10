<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="<?= URL ?>/assets/styles/reset.min.css">
    <link rel="stylesheet" href="<?= URL ?>/assets/styles/style.min.css">
</head>

<?php require '../controllers/data/database.php'; ?>

<?php 

$prepare = $pdo->prepare('SELECT first_name FROM users WHERE id = :id ');
$prepare->bindValue('id', $_SESSION['id']);
$prepare->execute();


$userName = ucfirst($prepare->fetch()->first_name);

?>

<body class="body">
  <header class="header">
    <nav class="nav">
      <div class="container--logo">
      <a class="link--logo" href="<?= URL ?>"> 
        <img class="logo" src="assets/images/logo.png" alt="logo Alley oop">
      </a>
      </div>
      <div class="container--title">
        <h1 class="title"><?= !empty($title) ? $title : '' ?></h1>
      </div>
      <div class="container--profile">
        <p class="profile__name">Bonjour <?php echo($userName); ?></p>
        <img class="profile__img" src="" alt="">
        <img class="profile__icon" src="" alt="">
      </div>
    </nav>
  </header>
  


