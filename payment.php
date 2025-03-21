<?php
$data = array(
'service' => 'w6kb59JanfAgICw9X04bptRJzfP1TGeG',
'phonenumber' => '237655930553',
'amount' => 1000
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.monetbil.com/payment/v1/placePayment');
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_TIMEOUT, 30);
$json = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$jsonArry = json_decode($json, true);
print_r($jsonArry);