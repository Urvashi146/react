<?php
$username = "root";
$password = "home1234";

$my_db = "mysql:host=localhost;dbname=pdodb";
try{
    $conn = new PDO($my_db,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $fname="urvashi";
    $sql = $conn->prepare("select * from pdotable1 where firstname = ?");
    $sql->bindparam(1,$fname);
    $sql->execute();

    $result= $sql->fetchAll(PDO::FETCH_ASSOC);
   
    if(count($result))
    {
        foreach($result as $row)
        {
            echo"{$row['id']}-{$row['firstname']}-{$row['email']}<br><br>";
        }
    }
}
catch(PDOException $e)
    // else
    {
        // echo $sql . "<br>" . $e->getMessage();
        echo "not selected data successfully !". $e->getMessage();
    }


?>