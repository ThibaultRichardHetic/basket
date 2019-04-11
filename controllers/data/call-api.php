<?php

$cl = curl_init();
curl_setopt($cl, CURLOPT_URL, "https://www.balldontlie.io/api/v1/players?per_page=120");
curl_setopt($cl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($cl, CURLOPT_HEADER, FALSE);
curl_setopt($cl, CURLOPT_HTTPHEADER, array("Accept : application/json"));
$resp = curl_exec($cl);
curl_close($cl);
$resp = json_decode($resp);

echo '<pre>';
print_r($resp);
echo '</pre>';

// https://www.balldontlie.io/api/v1/teams?per_page=30
// pour avoir toutes les teams