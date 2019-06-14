<?php



require "vendor/autoload.php";

$access_token = 'mVwxTnvc7olWunJbm9TgJbTKmPD9TuEc8T7tJNoWcL2E8lUeVu/q/nwR2onuYujed4qRv0IX4RZwCgQYcmzDZqFII6/kbKgSvKpaYCkc5Cs3F237qZKMZoKSp0ma3xORvN2gr0XbC6k6o2PB4dBvswdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a6b46a97f97dcda59e8bd3b981716e42';

$pushID = 'U5b71e30599e5a1e15b89eb8853061b28';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('เราชื่อก้องน้ะ');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







