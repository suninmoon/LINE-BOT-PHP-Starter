<?php
$access_token = 'kLXmlDjldD7wdVPbTRSASV2fuZ/s5H/S6TQRVMbUTSpH/TN76VAykqALraGPOxQuKZBA3+az4bnx/HXR3lKy+B1GeBad168RXoCQXqgD4W0SlMMHOzvJWyVFlhDq1qexH9Hs8uCD4nrDAsi6e5GEegdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
