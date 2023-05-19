<?php

$secret = "urvashi";

$header = json_encode([
    'typ' => 'JWT',
    'alg' => 'SHA256'
]);


$payload =json_encode([
    'name' => 'urvashi here',
    'city' => 'baroda'
]);

$bheader = base64_encode($header);
$bpayload = base64_encode($payload);

$signature = hash_hmac('sha256' ,$bheader. "." . $bpayload, $secret, true);

$bsignature = json_encode($signature);
$jwt = $bheader. "." . $bpayload . ".". $bsignature;

echo "This is your token:<br> " . $jwt;


?>