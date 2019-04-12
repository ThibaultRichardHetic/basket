<?php

// Get cURL resource
$ch = curl_init();

// Set url
curl_setopt($ch, CURLOPT_URL, 'https://api.mysportsfeeds.com/v1.2/pull/nba/2018-2019-regular/cumulative_player_stats.json?sort=stats.pts.D');

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
} else {
	echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "\nResponse HTTP Body : ";
    echo '<pre>';
    print_r($resp);
    echo '</pre>';
}

// Close request to clear up some resources
curl_close($ch);