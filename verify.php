<?php
$access_token = 'k2b4LpYvPmp6d8W+A0q8SDsA25eAM9q+WxA1wc7MeKKZG3m5h4xcJ0/OOi8nByG1KZBA3+az4bnx/HXR3lKy+B1GeBad168RXoCQXqgD4W2WbdiSdTq51x57giXIy0UkbiCQE10tYKiXP6zg4IZGqwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;