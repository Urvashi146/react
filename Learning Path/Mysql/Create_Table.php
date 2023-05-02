<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
        h2
        {
            color:red;
        }
        h3
        {
            color:green;
        }
    
    </style>
    
</head>
<body>

    <div class="container-fluid">
        <h1 class="text-center "><u>Create table</u></h1>
        <div class="row border border-success border-3 rounded-5 m-1">
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
                    < ?php
                    $servername = "localhost";
$username = "root";
$password="home1234";
$dbname = "frontend1"

$con = mysqli_connect($servername, $username, $password,$dbname);

if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}


$sql = "CREATE TABLE emp_info 
(id INT(6)  AUTO_INCREMENT PRIMARY KEY,
firstname varchar(15) not null,
lastname varchar(15) not null,
emailid varchar(30) not null
DOB date  ";
if(mysqli_query($con,$sql))
{
    echo"table hse been successfully created!";
}
else{
    echo"table hse been not created!".mysql_error($con);

}




?>
             
                    </strong>
                </pre>
                    
               
            </div>
            <div class="col  border border-1 border-info shadow shadow-dark m-5">
               
<h2>output</h2>
<?php
$servername = "localhost";
$username = "root";
$password="home1234";
$dbname = "frontend1";

$con = mysqli_connect($servername, $username, $password,$dbname);

if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}


$sql = "CREATE TABLE emp_info 
(id INT(6)  AUTO_INCREMENT PRIMARY KEY,
firstname varchar(15) not null,
lastname varchar(15) not null,
emailid varchar(30) not null,
dob DATE)";

if(mysqli_query($con,$sql))
{
    echo"emp_info table hse been successfully created!";
}
else{
    echo"emp_info table has been not created!". mysqli_error($con);

}




?>

             </div>
        </div>

       
        
       
</div>



   




   




</body>
</html>