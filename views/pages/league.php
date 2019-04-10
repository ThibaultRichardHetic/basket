<?php include '../views/partials/home-header.php' ?>

  <main class="main--league">
    <section class="section--1">
      <div class="container">
        <h2 class="title">Créer ta ligue</h2>
      </div>
    </section>
    <section class="section--2">
      <div class="container--form">
        <h3 class="title--form">Nouvelle league</h3>
        <form action="#" method="post">
          <div class="field">
            <label class="js-label" for="league">Nom de la ligue</label>
            <input class="input js-input" type="text" name="league">
          </div>
          <p class="info">
            Saisis l’adresse mail ou le pseudo de tes amis pour les inviter à rejoindre ta league :
          </p>
          <div class="field">
            <label class="js-label" for="friend-name">Mail / Pseudo de ton ami</label>
            <input class="input js-input" type="text" name="friend-name">
          </div>
          <div class="field">
            <label class="js-label" for="friend-name">Mail / Pseudo de ton ami</label>
            <input class="input js-input" type="text" name="friend-name">
          </div>
          <div class="button--add">
            <p class="text">+ Ajouter un ami</p>
          </div>
          <div class="field">
          <input class="submit" type="submit"  name="creation_submit" value="Créer">
        </div>
        </form>
      </div>
      <div class="container--illu">
        <div class="illu--bg"></div>
      </div>
    </section>
  </main>


<?php include '../views/partials/footer.php' ?>
