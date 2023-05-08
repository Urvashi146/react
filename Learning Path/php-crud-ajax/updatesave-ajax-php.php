<?php
$id = $_POST['stid'];
$name = $_POST['sname'];
$add = $_POST['sadd'];
$clas = $_POST['scla'];
$phone = $_POST['sphn'];





$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$sql = "UPDATE student SET name = '{$name}',address = '{$add}', class = '{$clas}', phone = '{$phone}'  WHERE id = {$id}";

echo $res = mysqli_query($con,$sql) or die("sql query failed");

// if(mysqli_query($con,$sql))
// {
//     echo 1;
// }else{
//     echo 0;
// }


?>