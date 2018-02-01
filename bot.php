<?php
$access_token = 'Ke4AD7dO7T4uy2KuNUueCSpwn4ja4UbM8oFPXz9ybpFjy9j7igeFF1l0V1f1p7jUEZTO3xGU+rsRJUiZOZ/GYJKB/NGFPQxLxXZ+rGeD8LFzNuGGLY7927r3vKg0jfFLmr5Hqtu0XQs3F7jPeMJjIAdB04t89/1O/w1cDnyilFU=';

$proxy = 'http://fixie:MW30JqTyxH5cpYt@velodrome.usefixie.com:80';
$proxyauth = 'pondmyinlove@gmail.com:0836458085Pp';

$content = file_get_contents('php://input');
$events = json_decode($content, true);
$urlapi = 'https://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/1';
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			$messages = [
				'type' => 'text',
				'text' => $urlapi
			];

			// Make a POST Request to Messaging API to reply to sender
			
			$url = 'https://api.line.me/v2/bot/message/reply';
			
			$data = [
				
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
$url = ' https://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button2/1 ';
			echo $result . "\r\n";
		}
		
	}
}
echo "OK";
