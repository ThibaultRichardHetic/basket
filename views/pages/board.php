<?php include '../views/partials/header.php' ?>

  <main class="main--board">
    <section class="section--1">
      <div class="container">
        <h2 class="title">Bon retour parmi nous coach !</h2>
      </div>
    </section>
    <section class="section--2">
      <div class="container">
        <h2 class="title">Tes ligues</h2>
        <div class="container--league">

          <?php 
            $prepare = $pdo->prepare('SELECT leagues.name FROM `users`,`leagues`,`league_users` WHERE users.id = league_users.id_user and leagues.id = league_users.id_league and league_users.id_user = :id');
            $prepare->bindValue('id', $_SESSION['id']);
            $prepare->execute();

            $myLeagues = $prepare->fetchAll();
          ?>

          <?php foreach ($myLeagues as $_league) : ?>
            <div class="league">
              <div class="container--delet">
                <div class="button--delet">
                  <form class="form" action="" method="post">
                    <input class="input" type="submit" value="x">
                  </form>
                </div>
              </div>
              <div class="container--title">
                <h4 class="league__title"><?= $_league->name ?></h4>
              </div>

              <a href="<?= URL ?>club?<?= $_league->name?>">
                <div class="button--go">
                  <p class="link">Go</p>
                </div>
              </a>
            </div>
          <?php endforeach; ?>

          <div class="league--new">
            <a class="link" href="<?= URL ?>ligue">
              <div class="button--new">
                <p class="cross">+</p>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section>
    <section class="section--3">
    </section>
    <section class="section--4">

    </section>
  </main>

<?php include '../views/partials/footer.php' ?>


