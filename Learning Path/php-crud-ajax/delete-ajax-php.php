<?php
$id =$_POST['id'];


$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$sql = "DELETE FROM student WHERE id= {$id}";

$res = mysqli_query($con,$sql) or die("sql query failed");

// if(mysqli_query($con,$sql))
// {
//     echo 1;
// }else{
//     echo 0;
// }


?>