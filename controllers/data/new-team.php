<?php 

// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'https://api.mysportsfeeds.com/v1.2/pull/nba/2018-2019-regular/cumulative_player_stats.json?limit=100');

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



while (1 == 1) {
  $index_1 = rand(0, 100);
  $index_2 = rand(0, 100);
  if ($index_1 != $index_2) {
    $index_3 = rand(0, 100);
    if (($index_3 != $index_1) && ($index_3 != $index_2)){
      $index_4 = rand(0, 100);
      if (($index_4 != $index_1) && ($index_4 != $index_2) && ($index_4 != $index_3)) {
        $index_5 = rand(0, 100);
        if (($index_5 != $index_1) && ($index_5 != $index_2) && ($index_5 != $index_3) && ($index_5 != $index_4)) {
          $GLOBALS['player_1'] = $resp->cumulativeplayerstats->playerstatsentry[$index_1];
          $GLOBALS['player_2'] = $resp->cumulativeplayerstats->playerstatsentry[$index_2];
          $GLOBALS['player_3'] = $resp->cumulativeplayerstats->playerstatsentry[$index_3];
          $GLOBALS['player_4'] = $resp->cumulativeplayerstats->playerstatsentry[$index_4];
          $GLOBALS['player_5'] = $resp->cumulativeplayerstats->playerstatsentry[$index_5];
          break;
        }
      }
    }
  }
}

if (!empty($GLOBALS['player_1'])) {
  $players_name = array(
    "player_1" => $GLOBALS['player_1']->player->LastName,
    "player_2" => $GLOBALS['player_2']->player->LastName,
    "player_3" => $GLOBALS['player_3']->player->LastName,
    "player_4" => $GLOBALS['player_4']->player->LastName,
    "player_5" => $GLOBALS['player_5']->player->LastName
  );

  $prepare = $pdo->prepare('INSERT INTO players (player_1,	player_2, player_3,	player_4,	player_5) VALUES (:player_1,	:player_2, :player_3,	:player_4,	:player_5)');
  $prepare->bindValue('player_1', $players_name['player_1']);
  $prepare->bindValue('player_2', $players_name['player_2']);
  $prepare->bindValue('player_3', $players_name['player_3']);
  $prepare->bindValue('player_4', $players_name['player_4']);
  $prepare->bindValue('player_5', $players_name['player_5']);
  //$prepare->execute();

  $prepare = $pdo->prepare('SELECT max(id) FROM players');
  $prepare->execute();

  $resp = $prepare->fetch();

  $maxId = 'max(id)';

  $player_id = $resp->$maxId;

  $prepare = $pdo->prepare('UPDATE league_users SET id_player = :player WHERE ((id_user = :user) && (id_league = :league))');
  $prepare->bindValue('league', $leagueId);
  $prepare->bindValue('user', $_SESSION['id']);
  $prepare->bindValue('player', $player_id);
  $prepare->execute();


}