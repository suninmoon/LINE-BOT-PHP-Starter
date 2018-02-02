<?php
$access_token = 'Ke4AD7dO7T4uy2KuNUueCSpwn4ja4UbM8oFPXz9ybpFjy9j7igeFF1l0V1f1p7jUEZTO3xGU+rsRJUiZOZ/GYJKB/NGFPQxLxXZ+rGeD8LFzNuGGLY7927r3vKg0jfFLmr5Hqtu0XQs3F7jPeMJjIAdB04t89/1O/w1cDnyilFU=';

$proxy = 'http://fixie:MW30JqTyxH5cpYt@velodrome.usefixie.com:80';
$proxyauth = 'pondmyinlove@gmail.com:0836458085Pp';

$events = json_decode($content, true);
$events0 = json_decode($content0, true);
$content = file_get_contents('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/1');
$content0 = file_get_contents('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/0');
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == '$messages' && $event['$messages']['type'] == '1') {
			//$events = json_decode($content, true);
		//$content = file_get_contents('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/1');

//$content = file_get_contents('php://input');
			// Get text sent
			$Text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];
		
			// Build message to reply back
			$messages = [
				'type' == '1',
				'text' == '$content',
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
			echo $result . "\r\n";
		}

		if ($event0['type0'] == '$messages0' && $event0['$messages0']['type0'] == '0') {
			//$content = file_get_contents('php://input');
			//$events0 = json_decode($content0, true);
//$content0 = file_get_contents('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/0');
			// Get text sent
			$Text = $event0['message0']['text'];
			// Get replyToken
			$replyToken = $event0['replyToken'];
		
			// Build message to reply back
			$messages0 = [
				'type0' == '0',
				'text' == [$content0],
			];

			// Make a POST Request to Messaging API to reply to sender
			
			$url0 = 'https://api.line.me/v2/bot/message0/reply';
			
			$data0 = [
				
				'replyToken' => $replyToken,
				'messages0' => [$messages0],
			];
			$post = json_encode($data0);
			$headers = array('Content0-Type0: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url0);
			curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
		echo "ok";
	}

}
