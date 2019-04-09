<?php include '../views/partials/home-header.php' ?>

<main class="main">
  <section class="section--1">
    <div class="container">
      <div class="container--text">
        <h1 class="title">Alley Oop</h1>
        <p class="text">Défis tes amis avec ton équipe ! League de 2, 4, 6, 8 et 10</p>
      </div>
      <div class="container--button">
        <a class="button__text" href="<?= URL ?>connexion">Commencez</a>
      </div>
    </div>
  </section>
  <section class="section--2">
    <div class="container--articles">
      <article class="article">
        <div class="container--icon">
          <img class="icon" src="assets/icons/money-bag.svg" alt="icon d'un sac de d'argent, avec le logo dollard">
        </div>
        <h3 class="title">Fait ton mercato</h3>
        <p class="text">
          On prévient, ça va être sanglant. Tu vas devoir être plus malin que tes amis dans tes enchères afin de récupérer les meilleurs joueurs. 500M€ virtuels à dépenser quand même.
        </p>
      </article>
      <article class="article">
        <div class="container--icon">
          <img class="icon" src="assets/icons/star.svg" alt="icon d'étoile">
        </div>
        <h3 class="title">Défis tes amis</h3>
        <p class="text">
          Et en fonction des performances de tes joueurs dans la vraie vie (buts, bonnes stats…), tu gagnes/perds contre ton ami. Tu peux aussi utiliser des bonus WTF comme la valise à Nanard ou Zahia. No comment ...
        </p>
      </article>
      <article class="article">
        <div class="container--icon">
          <img class="icon" src="assets/icons/flag.svg" alt="icon de drapeau">
        </div>
        <h3 class="title">Lundi matin</h3>
        <p class="text">
          On ouvre les vannes, ton résultat MPG vient de tomber, c’est le moment de tailler ton ami après cette belle rouste. Attention au retour de bâton quand même.
        </p>
      </article>
    </div>
    <div class="container--button">
        <a class="button__text" href="<?= URL ?>connexion">Commencez</a>
      </div>
  </section>
</main>


<?php include '../views/partials/footer.php' ?>

