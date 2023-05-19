<?php
$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=pdodb";
try{
    $conn = new PDO($my_db,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "insert into pdotable1 (firstname,email) 
    values ('ur','def@gmail.com'),
    ('urv','ab@gmail.com'),
    ('urva','ac@gmail.com'),
    ('urvas','bc@gmail.com'),
    ('urvash','c@gmail.com')";
    $conn->exec($sql);
    echo "<h1>inserted data successfully ! </h1><br>";
}
catch(PDOException $e)
{
    // echo $sql . "<br>" . $e->getMessage();
    echo "not inserted data successfully !". $e->getMessage();
}


?>