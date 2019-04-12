<?php include '../views/partials/header.php' ?>
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

<h4 class="title--ranking">Récapitulatif des scores</h4>
<section class="section--3">
    <table class="table-stats">
        <tr class="container-infos">
            <td class="col-name">Nom de l'équipe</td>
            <td></td>
            <td class="col-points">Points</td>
            <td class="col-win">Victoires</td>
            <td class="col-loose">Défaites</td>
        </tr>
        <tr class="container-stats">
            <td class="col-name">01. Loulou36</td>
            <td></td>
            <td class="col-points">236</td>
            <td class="col-win">10</td>
            <td class="col-loose">0</td>
        </tr>
        <tr class="container-stats">
            <td class="col-name">02. RomainDu14</td>
            <td></td>
            <td class="col-points">142</td>
            <td class="col-win">7</td>
            <td class="col-loose">3</td>
        </tr>
        <tr class="container-stats">
            <td class="col-name">03. Momo75</td>
            <td></td>
            <td class="col-points">124</td>
            <td class="col-win">3</td>
            <td class="col-loose">7</td>
        </tr>
        <tr class="container-stats">
            <td class="col-name">04. KissouXx</td>
            <td></td>
            <td class="col-points">78</td>
            <td class="col-win">0</td>
            <td class="col-loose">10</td>
        </tr>
    </table>
    <img class="dunk" src="<?= URL ?>/assets/images/dunk.png" alt="">
</section>
</main>
<?php include '../views/partials/footer.php' ?>