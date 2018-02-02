<?php
$access_token = 'Ke4AD7dO7T4uy2KuNUueCSpwn4ja4UbM8oFPXz9ybpFjy9j7igeFF1l0V1f1p7jUEZTO3xGU+rsRJUiZOZ/GYJKB/NGFPQxLxXZ+rGeD8LFzNuGGLY7927r3vKg0jfFLmr5Hqtu0XQs3F7jPeMJjIAdB04t89/1O/w1cDnyilFU=';

$proxy = 'http://fixie:MW30JqTyxH5cpYt@velodrome.usefixie.com:80';
$proxyauth = 'pondmyinlove@gmail.com:0836458085Pp';

$events = json_decode($content, true);
$content = file_get_contents('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/1');

//$eventsB = json_decodeB($contentB, true);
//$contentB = file_get_contentsB('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/0');

if (!is_null($events['events'])) {

	foreach ($events['events'] as $event) {

		if ($event['type'] == '$messages' && $event['$messages']['type'] == '1') {

			$Text = $event['message']['1'];

			$replyToken = $event['replyToken'];

			$messages= [
				'type' == '1',
				'1' == '$content',
			];

			
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
			curl_setopt($ch CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$resultA = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
		}
		
	}

}
echo "ok";

