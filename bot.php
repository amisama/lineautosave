<?php
require_once('./class.php');
require_once('./data.php');



	//Auto Save Type Image
if ($message['type']=='image') {
	$context = stream_context_create(['http' => ['header' => "Authorization: Bearer $channelAccessToken"]]);
	$image2 = file_get_contents("https://api.line.me/v2/bot/message/".$messageid."/content", false, $context );
	$namaFile = rand(1,1000).".jpg";
	file_put_contents($namaFile, $image2);
	
	$responses['replyToken'] = $replyToken;
	$responses['messages']['0']['type'] = "text";
	$responses['messages']['0']['text'] = "https://localhost/$namaFile";
	$result = json_encode($responses);
	$result_json = json_decode($result, TRUE);
	$balas = $result_json;
}
		
	//Auto Save Type Video
if ($message['type']=='video') {
	$context = stream_context_create(['http' => ['header' => "Authorization: Bearer $channelAccessToken"]]);
	$image2 = file_get_contents("https://api.line.me/v2/bot/message/".$messageid."/content", false, $context );
	$namaFile = rand(1,1000).".mp4";
	file_put_contents($namaFile, $image2);
	
	$responses['replyToken'] = $replyToken;
	$responses['messages']['0']['type'] = "text";
	$responses['messages']['0']['text'] = "https://localhost/$namaFile";
	$result = json_encode($responses);
	$result_json = json_decode($result, TRUE);
	$balas = $result_json;
}

?>
