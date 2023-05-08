<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>



</head>
<body>
    
</body>
</html>
<?php
$s_id = $_POST['id'];


$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$sql = "SELECT * from student WHERE id = {$s_id}";
$res = mysqli_query($con,$sql) or die("sql query failed");
 

if(mysqli_num_rows($res) > 0)
{
    
    $output = "";
    while($row = mysqli_fetch_assoc($res))
    {
        $output .= "<form id='inform' class='border border-success rounded-lg shadow p-4 mb-4 shadow-dark'>
            <div class='row m-2'>
              <div class='col'>
                <input type='text' class='form-control' placeholder='Enter name' name='name' id='uname' value = '{$row["name"]}'>
                <input type='text' class='form-control' placeholder='Enter name' hidden name='uid' id='uid' value = '{$row["id"]}'>
              </div>
              <div class='col'>
                <input type='text' class='form-control' placeholder='Enter address' name='address' id='uaddress' value = '{$row["address"]}'>
              </div>
            </div>
            <div class='row m-2'>
              <div class='col'>
                <input type='text' class='form-control' placeholder='Enter class' name='class' id='uclass' value = '{$row["class"]}'>
              </div>
              <div class='col'>
                <input type='text' class='form-control' placeholder='Enter phone' name='phone' id='uphone' value = '{$row["phone"]}'>
              </div>
             
            </div>
            </form>";
    }
    
    
    mysqli_close($con);
    echo $output;
} 

 
?>
