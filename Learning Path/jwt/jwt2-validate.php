<?php
// next step is to verifiy the token in php
// user can verify the token through its signature.
$recievedJwt = 'eyJhbGdvIjoic2hhMjU2IiwidHlwZSI6Imp3dCJ9.eyJuYW1lIjoidXJ2YXNoaSBidmFyb3QiLCJwb3NpdGlvbiI6IndlYiBkZXZsb3BlciJ9.twK+S3ZBdA9qw+mrR6At0DZ3RPH0h7tDl2s7ttzR8l8=';

$key = 'urvashi1';

// Split a string by '.' 
$jwt_values = explode('.', $recievedJwt);

$recieved_signature = $jwt_values[2];

$recievedHeaderAndPayload = $jwt_values[0] . '.' . $jwt_values[1];

$resultedsignature = base64_encode(hash_hmac('sha256', $recievedHeaderAndPayload, $key, true));

if($resultedsignature == $recieved_signature) 
{
echo "Success";
}
else
{
echo "not matched";
}
?>