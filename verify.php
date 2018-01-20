<?php
$access_token = 'c7jwqoaGhGOhc7Q2uy9jB9NgaKBES4qBe+g9Dk7NXGkT4C60lwvVtpWtAST99OxGKZBA3+az4bnx/HXR3lKy+B1GeBad168RXoCQXqgD4W3TY9FhN1ReWaqA7cwTFNu11qVv5wu9vj6EOP3hD8340gdB04t89/1O/w1cDnyilFU=
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
