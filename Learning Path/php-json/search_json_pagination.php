
<?php
$json = file_get_contents('php://input');



$data = json_decode($json);


$search_val = $data->search; 

$conn = mysqli_connect("localhost","root","home1234","pdodb") or die("conn lost");
$sql = "select * from pdotable1 where firstname LIKE '%{$search_val}%'";
$result = mysqli_query($conn,$sql) or die("query fail");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);




?>