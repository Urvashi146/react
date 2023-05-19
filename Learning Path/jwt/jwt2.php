<?php

$key = 'urvashi1';

$header = json_encode([
    'algo' => 'sha256',
    'type' => 'jwt' 
]);
$payload = json_encode([
    'name' => 'urvashi bvarot',
    'position' => 'web devloper'
]);

$bsheader = base64_encode($header);
$bspayload = base64_encode($payload);

$signature =  hash_hmac('sha256',$bsheader. "." . $bspayload , $key,true);

$bssignature = base64_encode($signature);

$jwt = $bsheader. "." .$bspayload. "." .$bssignature;
echo "Token is here:<br>" . $jwt . "<br><br>";
// echo "This is your token:<br> " . $jwt;






?>
<html>
    <a href="jwt2-validate.php">click here for validation</a>
</html>