<?php
$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=pdodb";
try{
    $conn = new PDO($my_db,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into pdotable1 (firstname,email)
    values ('uri','dtef@gmail.com')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "New record created successfully. Last inserted ID is: " . $last_id;
}
catch(PDOException $e)
{
    // echo $sql . "<br>" . $e->getMessage();
    echo "not inserted data successfully !". $e->getMessage();
}


?>