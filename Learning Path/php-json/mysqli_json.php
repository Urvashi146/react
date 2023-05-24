<?php

$json = file_get_contents('php://input');



$data = json_decode($json);

$limit = $data->limit;

// for click on link(page_no)
$page = "";
if(isset($data->page_no)){
    $page = $data->page_no;
}
else{
    $page = 1;
}

$offset = ($page - 1) * $limit;   
// for click on link(page_no) end



$conn = mysqli_connect("localhost","root","home1234","pdodb") or die("conn lost");
$sql = "select * from pdotable1 limit {$offset},{$limit}";
$result = mysqli_query($conn,$sql) or die("query fail");
$output = mysqli_fetch_all($result,MYSQLI_ASSOC);
echo json_encode($output);




?>