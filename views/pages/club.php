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
        <?php 
          $prepare = $pdo->prepare('SELECT id_player FROM league_users WHERE ((id_user = :user) && (id_league = :league))');
          $prepare->bindValue('league', $leagueId);
          $prepare->bindValue('user', $_SESSION['id']);
          $prepare->execute();
          $id_player = $prepare->fetch()->id_player;


          $prepare = $pdo->prepare('SELECT player_1, player_2, player_3, player_4, player_5 FROM players WHERE id = 4');
          $prepare->bindValue('id', $id_player);
          $prepare->execute();
          $players = $prepare->fetchAll();

          // echo '<pre>';
          // print_r($players);
          // echo '</pre>';

          function callImg($name){
            // Get cURL resource
            $ch = curl_init();

            // Set url
            $url = 'https://api.mysportsfeeds.com/v1.2/pull/nba/2018-2019-regular/active_players.json?player=';
            $url = $url.$name;

            curl_setopt($ch, CURLOPT_URL, $url);

            // Set method
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

            // Set options
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            // Set compression
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            // Set headers
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
              "Authorization: Basic " . base64_encode('9ecc103f-42b8-4703-a90e-3110b7' . ":" . 'hetic2019')
            ]);

            // Send the request & save response to $resp
            $resp = curl_exec($ch);

            $resp = json_decode($resp);

            if (!$resp) {
              die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
            }

            // Close request to clear up some resources
            curl_close($ch);


            $img = $resp->activeplayers->playerentry[0]->player->officialImageSrc;
            return $img;
          }


        ?>
        <h4 class="title">Ton équipe</h4>
        <div class="container--players">
          <div class="player">
            <h4 class="name"><?= $players[0]->player_1?></h4>

            <div class="container--img">
              <?php $name = $players[0]->player_1 ?>
              <img src="<?= callImg($name); ?>" alt="">
            </div>
          </div>
          <div class="player">
            <h4 class="name"><?= $players[0]->player_2?></h4>
            <div class="container--img">
              <img src="" alt="">
            </div>
          </div>
          <div class="player">
            <h4 class="name"><?= $players[0]->player_3?></h4>
            <div class="container--img">
              <img src="" alt="">
            </div>
          </div>
          <div class="player">
            <h4 class="name"><?= $players[0]->player_4?></h4>
            <div class="container--img">
              <img src="" alt="">
            </div>
          </div>
          <div class="player">
            <h4 class="name"><?= $players[0]->player_5?></h4>
            <div class="container--img">
              <img src="" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


<?php include '../views/partials/footer.php' ?>