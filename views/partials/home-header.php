<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= !empty($title) ? $title : '' ?></title>
    <link rel="stylesheet" href="<?= URL ?>/assets/styles/reset.min.css">
    <link rel="stylesheet" href="<?= URL ?>/assets/styles/style.min.css">
</head>
<body class="body--home">
  <header class="header">
    <nav class="nav">
      <div class="container--logo">
      <a class="link--logo" href="<?= URL ?>"> 
        <img class="logo" src="assets/images/logo.png" alt="logo Alley oop">
      </a>
      </div>
      <div class="container--list">
        <ul class="list">
          <a class="link--li" href="<?= URL ?>connexion">
            <li class="li">Connexion</li>
          </a>
          <a class="link--li" href="<?= URL ?>connexion">
            <li class="li">Inscription</li>
          </a>
        </ul>
      </div>
    </nav>
  </header>