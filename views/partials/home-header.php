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
    <nav>
      <div>
      <!-- rediriger vers la home  -->
      <a href=""> 
        <img class="logo" src="assets/images/logo.png" alt="logo Alley oop">
      </a>
      </div>
      <div>
        <ul>
          <li>Connexion</li>
          <li>Inscription</li>
        </ul>
      </div>
    </nav>
  </header>