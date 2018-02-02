<?php
$access_token = 'Ke4AD7dO7T4uy2KuNUueCSpwn4ja4UbM8oFPXz9ybpFjy9j7igeFF1l0V1f1p7jUEZTO3xGU+rsRJUiZOZ/GYJKB/NGFPQxLxXZ+rGeD8LFzNuGGLY7927r3vKg0jfFLmr5Hqtu0XQs3F7jPeMJjIAdB04t89/1O/w1cDnyilFU=';

$proxy = 'http://fixie:MW30JqTyxH5cpYt@velodrome.usefixie.com:80';
$proxyauth = 'pondmyinlove@gmail.com:0836458085Pp';

$eventsA = json_decodeA($contentA, true);
$contentA = file_get_contentsA('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/1');

$eventsB = json_decodeB($contentB, true);
$contentB = file_get_contentsB('http://api.anto.io/channel/set/tZlbFUDeFGiTmSxQEjm3PaOdtQM7g024mJOuYp64/Messaging/button1/0');

if (!is_null($eventsA['eventsA'])) {

	foreach ($eventsA['eventsA'] as $eventA) {

		if ($eventA['typeA'] == '$messagesA' && $eventA['$messagesA']['typeA'] == '1') {

			$TextA = $eventA['messageA']['textA'];

			$replyTokenA = $eventA['replyTokenA'];

			$messagesA= [
				'typeA' == '1',
				'textA' == '$contentA',
			];

			
			$urlA = 'https://api.line.me/v2/bot/message/reply';
			
			$dataA = [
				
				'replyTokenA' => $replyTokenA,
				'messagesA' => [$messagesA],
			];
			$postA = json_encodeA($data);
			$headersA = array('ContentA-TypeA: application/json', 'Authorization: Bearer ' . $access_token);

			$chA = curl_init($urlA);
			curl_setopt($chA, CURLOPT_PROXY, $proxy);
curl_setopt($chA, CURLOPT_PROXYUSERPWD, $proxyauth);
			curl_setopt($chA CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($chA, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($chA, CURLOPT_POSTFIELDS, $postA);
			curl_setopt($chA, CURLOPT_HTTPHEADER, $headersA);
			curl_setopt($chA, CURLOPT_FOLLOWLOCATION, 1);
			$resultA = curl_exec($chA);
			curl_close($chA);
			echo $resultA . "\r\n";
		}
		
	}

}
echo "ok";

