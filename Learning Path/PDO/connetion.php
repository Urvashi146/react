<?php
$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=crud";
try{
    $conn = new PDO($my_db,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h1>connection done!</h1>";
}
catch(PDOException $e)
{
    echo "not done !!!!". $e->getMessage();
}


?>