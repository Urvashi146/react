<?php
$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=pdodb";
try{
    $conn = new PDO($my_db,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE pdotable1 (
        id INT(6),
        firstname VARCHAR(30) NOT NULL,
        email VARCHAR(50)
         )";
    $conn->exec($sql);
    echo "<h1>table created! </h1>";
}
catch(PDOException $e)
{
    // echo $sql . "<br>" . $e->getMessage();
    echo "table  not created  !!!!". $e->getMessage();
}


?>