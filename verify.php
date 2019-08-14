<?php
$access_token = 'ykmQl/VehCua9FW6o7lMnL+RKcRshu2GJ8r9NVLlU0DdgBw+g06OG4KW3ll80gKZHJMVAcXhvlX11o7mZ+JFNP+/0TsuwSmPX6gjzVDfOpryQ8BpMyN1a6RKjq4mhEWeoceK4Qhk+z4vynoePOZ8EwdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
