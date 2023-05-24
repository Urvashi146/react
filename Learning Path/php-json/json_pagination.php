
<?php
$json = file_get_contents('php://input');



$data = json_decode($json);
$con = mysqli_connect("localhost","root","home1234","pdodb") or die("connection fail");

$limit = $data->limit;
$offset = $data->offset; 



 
 $sql_total = "SELECT * from pdotable1";
 $records = mysqli_query($con,$sql_total) or die("sql query failed");
 $total_records = mysqli_num_rows($records);
$total_pages = ceil($total_records/$limit);



echo json_encode($total_pages);
    
?>
