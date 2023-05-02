<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysql-start</title>
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
        <h1 class="text-center "><u>Mysql-start</u></h1>
        <div class="row border border-success border-3 rounded-5 m-1">
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
                    < ?php
$servername = "localhost";
$username = "root";
$password="home1234";

$con = mysqli_connect($servername, $username, $password);

if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo"done";
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

$con = mysqli_connect($servername, $username, $password);

if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}
else{
    echo"connection done";
}




?>

             </div>
        </div>

       
        
       
</div>



   




   




</body>
</html>