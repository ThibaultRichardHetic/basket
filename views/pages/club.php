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

  if ($isPossible == 0) {
    include '../controllers/data/new-team.php'; 
  }
?>

<?php 
  $prepare = $pdo->prepare('SELECT id_user FROM league_users WHERE id_league = :league');
  $prepare->bindValue('league', $leagueId);
  $prepare->execute();

  $users = $prepare->fetchAll();

  foreach ($users as $_user) {
    if ($_user->id_user != $_SESSION['id']) {
      $GLOBALS['id_vs'] = $_user->id_user;
      break;
    }
  }
$prepare = $pdo->prepare('SELECT first_name FROM users WHERE id = :id ');
$prepare->bindValue('id', $GLOBALS['id_vs']);
$prepare->execute();
$userNameVs = ucfirst($prepare->fetch()->first_name);
$urlAvatarVs = 'https://avatars.dicebear.com/v2/male/:'.$GLOBALS['id_vs'].'.svg'
?>

  <main class="main--club">
    <section class="section--1">
      <div class="container">
        <div class="container--profile">
          <div class="container--img">
            <img class="profile__img" src="<?= $urlAvatar ?>" alt="">
          </div>
          <h4 class="name"><?= $userName ?></h4>
        </div>
        <div class="container--date">
          <h3 class="title">Prochain match</h3>
        </div>
        <div class="container--profile">
          <div class="container--img">
            <img class="profile__img" src="<?= $urlAvatarVs ?>" alt="">
          </div>
          <h4 class="name"><?= $userNameVs ?></h4>
        </div>
      </div>
    </section>
    <section class="section--2">
      <nav class="nav">
        <a href="<?= URL ?>classement">Classement</a>
        <a class="link" href="">Club</a>
      </nav>
    </section>
    <section class="section--3">
      <!-- <div class="container--img">
      </div> -->
      <div class="container--team">
        <h4 class="title">Ton équipe</h4>
        <div class="container--players">
          lfe,fel
        </div>
      </div>
    </section>
  </main>


<?php include '../views/partials/footer.php' ?>
