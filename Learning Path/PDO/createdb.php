<?php
$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=crud";
try{
    $conn = new PDO($my_db,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "create database pdodb";
    $conn ->exec($sql);
    echo "<h1>database created! with name pdodb</h1>";
}
catch(PDOException $e)
{
    echo "database not created  !!!!". $e->getMessage();
}


?>