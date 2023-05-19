<?php

$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=pdodb";
$conn = new PDO($my_db,$username,$password);

$limit = $_POST["limit"];
$offset = $_POST["offset"];

$sql = $conn->prepare("select * from pdotable1 limit {$offset},{$limit}");
$sql->execute();
$json_array = array();
// $conn->exec($sql);
while($result= $sql->fetchAll(PDO::FETCH_ASSOC))
{
    $json_array[]= $result;
}

// print_r($result);
// echo "<pre>";
echo json_encode($json_array) ;

// echo "hiii";



?>

