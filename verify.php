<?php
$access_token = 'guRp5wIjo56Dqmkc0DhluFSTfWBc8JQf7RYr2i1vAsC2AEv8FyTmrxLwNeHfDdFgAd2q1OVzbznSuWq4v5y5iJWKaAJ+xiB7+UPj1sfX0oVbPk11c8jSYCrdT83KqfmAzkGOsATv/eQEvjuuk/XzpgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
