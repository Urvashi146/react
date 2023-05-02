<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
</body>
</html>
<?php
$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$sql = "SELECT * from student";
$res = mysqli_query($con,$sql) or die("sql query failed");
 

if(mysqli_num_rows($res) > 0)
{
    $output = " <table border='2' style='background-color:#FFFFFF;border-collapse:collapse;
    border:2px solid #6699FF;
    color:#000000;width:100%'>
    <tr border='2' style='border:2px solid #6699FF;background-color:black; color:white; border-collapse:collapse;'>
    <th >id</th>
    <th>Name</th>
    <th>address</th>
    <th>class</th>
    <th>phone</th>
    <th>Delete</th>
   



    </tr>";

    while($row = mysqli_fetch_assoc($res))
    {
        $output .= "<tr>
        <td>{$row["id"]}</td>
        <td>{$row["name"]}</td>
        <td>{$row["address"]}</td>

        <td>{$row["class"]}</td>

        <td>{$row["phone"]}</td>
        <td><button class='delete-btn' data-id='{$row["id"]}'>delete</button></td>

        </tr>";
    }
    $output .= "<table>";

    mysqli_close($con);
    echo $output;
} 
else{
    echo "<h2>no record found</h2>";
}
?>