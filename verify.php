<?php
$access_token = 'McOfBQ+H0G4i/pzlB+vqk4XDeYKZark1ecpNOYymxBB6YMk3l05NhMLifhDjRTJiKZBA3+az4bnx/HXR3lKy+B1GeBad168RXoCQXqgD4W1sEIjHCV+7vUrudkxYVVFQ7yyQ0LFgnaIBD55eAmajdQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;