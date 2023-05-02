<?php
echo $name =$_POST['aname'];
echo $add =$_POST['aaddress'];
echo $class =$_POST['aclass'];
echo $phone =$_POST['aphone'];

$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$sql = "INSERT INTO student (name,address,class,phone)
VALUES('{$name}','{$add}','{$class}','{$phone}')";

$res = mysqli_query($con,$sql) or die("sql query failed");

// if(mysqli_query($con,$sql))
// {
//     echo 1;
// }else{
//     echo 0;
// }


?>