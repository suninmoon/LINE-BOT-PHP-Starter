<?php
$access_token = 'nmVWm00d2o+09Y7q90d/bnRxhdloooNjuB4fXmqGFJj0Xi2un3YgmS1ZYTQbuZ3eKZBA3+az4bnx/HXR3lKy+B1GeBad168RXoCQXqgD4W2BzHevv9NYrR4MGefGyLwruyZEgDBiEEbHfubXGHcC+gdB04t89/1O/w1cDnyilFU=
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
