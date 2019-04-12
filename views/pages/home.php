<?php include '../views/partials/home-header.php' ?>

<main class="main--home">
  <section class="section--1">
    <div class="container">
      <div class="container--text">
        <h1 class="title">Alley Oop</h1>
        <p class="text">Deviens l’entraineur d’une équipe de basket et défis l’équipe de tes amis</p>
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
        <h3 class="title">Coach une vraie équipe</h3>
        <p class="text">
          Deviens coach d’une équipe composée des joueurs de la NBA et basée sur les données en temps réel de ces joueurs.
        </p>
      </article>
      <article class="article">
        <div class="container--icon">
          <img class="icon" src="assets/icons/star.svg" alt="icon d'étoile">
        </div>
        <h3 class="title">Défis tes amis</h3>
        <p class="text">
          Joue contre l’équipe de tes amis ou choisi de défier une équipe aléatoire.
        </p>
      </article>
      <article class="article">
        <div class="container--icon">
          <img class="icon" src="assets/icons/flag.svg" alt="icon de drapeau">
        </div>
        <h3 class="title">Résultats le lendemain</h3>
        <p class="text">
          Reviens voir ton équipe tous les lendemains de match. Les données du jeux sont basées sur les vraies données de la NBA.
        </p>
      </article>
    </div>
    <div class="container--button">
        <a class="button__text" href="<?= URL ?>connexion">Commencez</a>
      </div>
  </section>
</main>


<?php include '../views/partials/footer.php' ?>

