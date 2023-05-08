
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>  




</head>
<body>
    
</body>
</html>
<?php
$search_val = $_POST["search"];

$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$sql = "SELECT * from student WHERE name LIKE  '%{$search_val}%'";
$res = mysqli_query($con,$sql) or die("sql query failed");
 
$output =" ";

if(mysqli_num_rows($res) > 0)
{
    $output = " <table class='table table-bordered table-dark table-striped table-hover' >
    <tr class='text-center table-primary' >
    <th >id</th>
    <th>Name</th>
    <th>address</th>
    <th>class</th>
    <th>phone</th>
    <th>Edit</th>
    <th>Delete</th>
   
   


    </tr>";

    while($row = mysqli_fetch_assoc($res))
    {
        $output .= "<tr class='text-center '>
        <td>{$row["id"]}</td>
        <td>{$row["name"]}</td>
        <td>{$row["address"]}</td>

        <td>{$row["class"]}</td>

        <td>{$row["phone"]}</td>
        <td><button type='button' class='btn btn-success edit-btn m-1'  data-bs-toggle='modal' data-bs-target='#mymodal' data-eid='{$row["id"]}'>&#9998;</button></td>

        <td><button type='button' class='btn btn-danger delete-btn m-1'  data-id='{$row["id"]}'><i class='fa fa-trash' ></i></button></td>


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