
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  



</head>
<body>
    

<?php
require '/Users/aimm2301/sites/vendor/autoload.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

$key = 'uravshi';


$payload = ([$name = $_POST['token']]);

$jwt = JWT::encode($payload, $key, 'HS256');
$decoded = JWT::decode($jwt, new Key($key, 'HS256'));




echo "<h4><strong>Your Token:</strong></h4><div class='col mt-3 border border-primary border-4 shadow p-3 mb-5 bg-white rounded'>". $jwt."</div><br>";

echo "<div><button class='btn btn-primary m-3 text-center ' id='decode'>decode</button></div>";


foreach ($decoded as $value) {
    echo "<div class='col mt-3 border border-primary border-4 shadow p-3 mb-5 bg-white rounded' id='decode-res'><h4><strong>Decode Result:</strong></h4>". $value."</div><br>" ;
}


?>

</body>
</html>