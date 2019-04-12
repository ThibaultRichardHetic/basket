<?php include '../views/partials/header-club.php' ?>

<?php 
  $prepare = $pdo->prepare('SELECT id FROM leagues WHERE name = :name');
  $prepare->bindValue('name', $leagueName);
  $prepare->execute();

  $leagueId = $prepare->fetch()->id;

  $prepare = $pdo->prepare('SELECT id_player FROM league_users WHERE ((id_user = :user) && (id_league = :league))');
  $prepare->bindValue('league', $leagueId);
  $prepare->bindValue('user', $_SESSION['id']);
  $prepare->execute();

  $isPossible = $prepare->fetch()->id_player;

  echo '<pre>';
  print_r($isPossible);
  echo '</pre>';

  echo '<pre>';
  print_r($leagueId);
  echo '</pre>';

  echo '<pre>';
  print_r($_SESSION['id']);
  echo '</pre>';

  if ($isPossible == 0) {
    include '../controllers/data/new-team.php'; 
  }
?>


  <main class="main--club">
    <section class="section--1">
      <div class="container">
        <div class="container--profile">

        </div>
        <div class="container--date">

        </div>
        <div class="container--profile">

        </div>
      </div>
    </section>
    <section class="section--2">
      <nav>
        <a href="<?= URL ?>classement">Classement</a>
        <a href="">Club</a>
      </nav>
    </section>
    <section class="section--3">
      <div class="container--team">

      </div>
    </section>
  </main>


<?php include '../views/partials/footer.php' ?>
