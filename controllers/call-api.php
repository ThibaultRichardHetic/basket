<?php

$url = 'http://api.probasketballapi.com/boxscore/team';

$api_key = 'j58NdbRlDr2wgu30tXQPf7FO6ZKyh9m1';

$query_string = 'api_key='.$api_key.'&opponent_id=1610612753&player_id=202331';

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result = curl_exec($ch);

curl_close($ch);

echo '<pre>';
print_r($result);
echo '</pre>';

// "id":1610612747,"dk_id":13,"city":"L.A.","team_name":"Lakers","abbreviation":"LAL","created_at":"2015-10-21 15:29:41","updated_at":"2015-10-21 15:29:41"}]
