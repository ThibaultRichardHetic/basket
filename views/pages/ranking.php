<?php include '../views/partials/header.php' ?>
<?php require '../controllers/data/database.php'; ?>
<?php require '../controllers/data/get-user-info.php'; ?>
<main class="main--ranking">
  <section class="section--1">
    <div class="container">
      <h2 class="title">Classement</h2>
    </div>
  </section>
  <section class="section--2">
      <div class="container">
          <p class="text">Classement</p>
          <div class="space"></div>
          <p class="text">Club</p>
      </div>
  </section>

<section class="section--3">
    <div class="container--form container--inscription">
    <h4 class="title--form">Récapitulatif des scores</h4>
    <div class="container-infos">
        <p class="text-second">Nom du club</p>
        <div class="space-infos"></div>
        <p class="text-second">Points</p>
        <p class="text-second">Victoires</p>
        <p class="text-second">Défaites</p>
    </div>
    <div class="container-stats">
        <div class="player-1">
            <p class="text-second">01. Loulou36</p>
            <div class="space-datas-1"></div>
            <p class="text-second">236</p>
            <p class="text-second">10</p>
            <p class="text-second">00</p>
        </div>
        <div class="line"></div>
        <div class="player-1">
            <p class="text-second">02. RomainDu14</p>
            <div class="space-datas-2"></div>
            <p class="text-second">142</p>
            <p class="text-second">07</p>
            <p class="text-second">03</p>
        </div>
        <div class="line"></div>
        <div class="player-1">
            <p class="text-second">03. Momo75</p>
            <div class="space-datas-3"></div>
            <p class="text-second">124</p>
            <p class="text-second">03</p>
            <p class="text-second">07</p>
        </div>
        <div class="line"></div>
        <div class="player-1">
            <p class="text-second">04. KissouXx</p>
            <div class="space-datas-4"></div>
            <p class="text-second">78</p>
            <p class="text-second">00</p>
            <p class="text-second">10</p>
        </div>
    </div>
</section>




</main>
<?php include '../views/partials/footer.php' ?>








