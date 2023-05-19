<?php

require '/Users/aimm2301/sites/vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'this key';
$payload = [
    'name' => 'urvashi here',
    'city' => 'baroda'
];

$jwt = JWT::encode($payload, $key, 'HS256');

echo "This token using library:<br>" . $jwt;

// print_r($jwt);

?>