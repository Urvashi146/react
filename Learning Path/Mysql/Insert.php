<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert into table</title>
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
        <h1 class="text-center "><u>Insert into table</u></h1>
        <div class="row border border-success border-3 rounded-5 m-1">
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre>
                    <strong>
                       < ? php
                    $servername = "localhost";
$username = "root";
$password="home1234";
$dbname = "frontend1";

$con = mysqli_connect($servername, $username, $password,$dbname);

if(!$con)
{
    die("connection failed:".mysqli_connect_error());
}


$sql = "INSERT INTO emp_info(firstname,lastname,emailid,dob)
VALUES('urvashi','Barot','abc@gmail.com','1996-06-14')";

if(mysqli_query($con,$sql))
{
    echo"inserting record in emp_info table has  been successfully done!<br>";
    print_r($sql);
}
else{
    echo"emp_info table values has been not inserted!". mysqli_error($con);

}




?>
             
                    </strong>
                </pre>
                    
               
            </div>
            <div class="col  border border-1 border-info shadow shadow-dark m-5">
               
<h2>output</h2>
<img src="tabl1.png" class=" mx-auto " width="700" height="500">
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


$sql = "INSERT INTO emp_info(firstname,lastname,emailid,dob)
VALUES('urvashi','Barot','abc@gmail.com','1996-06-14')";

if(mysqli_query($con,$sql))
{
    echo"<br>inserting record in emp_info table hse been successfully done!<br>";
    print_r($sql);
}
else{
    echo"emp_info table values has been not inserted!". mysqli_error($con);

}




?>

             </div>
        </div>

       
        
       
</div>



   




   




</body>
</html>