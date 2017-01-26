<?php
$access_token = 'siCTS4Hd46oRhhcOIMFkMk8P52dtr/SPQTafTOdDIpYFxbD1jLfAuNwRUniojxOSGhvsOJUg0bo2EgVMTXBY9mCo5m6VTXiR+Qdy3mK2YPP6UyCjggmLGq078UKTqWULzV3FJ1/vXT9NCB4uZcBCWAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;