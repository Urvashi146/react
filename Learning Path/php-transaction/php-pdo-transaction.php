<?php
try{
    $db = "mysql:host=localhost;dbname=phptransaction";
    $user="root";
    $password ="home1234";
$option =[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

    $conn = new PDO($db,$user,$password,$option);
    $conn->beginTransaction();

    $sql1 = $conn->prepare("insert into transactiontable1 (name,address,city) values(?,?,?)");

    $sql2 = $conn->prepare("update transactioncity SET cstudent = cstudent + 1 WHERE cname = ? ");

    $sql1->execute(["shaurya","abdcd","baroda"]);
    $sql2->execute(["baroda"]);

    $conn->commit();
    echo"<h1>Done with Transaction</h1>";
}
catch(Exception $e){
    $conn->rollback();
    echo $e->getMessage();

}
?>