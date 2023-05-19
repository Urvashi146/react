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
$con = mysqli_connect("localhost","root","home1234","CRUD") or die("connection fail");

$limit_page = 3;

$page = "";

if(isset($_POST["page_no"])){
    $page = $_POST["page_no"];
}
else{
    $page = 1;
}
$offset = ($page -1) * $limit_page;

$sql = "SELECT * from student LIMIT {$offset},{$limit_page}";
$res = mysqli_query($con,$sql) or die("sql query failed");
$output = " ";

if(mysqli_num_rows($res) > 0)
{
        $output .= " <h1 class='m-5 text-center text-success shadow-lg '>Php Ajax Pagination</h1>
        <table class='table table-bordered table-dark table-striped table-hover' >
        <tr class='text-center table-primary' >
        <th >id</th>
        <th>Name</th>
        <th>address</th>
        <th>class</th>
        <th>phone</th>
        
        </tr>";

        while($row = mysqli_fetch_assoc($res))
        {
            $output .= "<tr class='text-center '>
            <td>{$row["id"]}</td>
            <td>{$row["name"]}</td>
            <td>{$row["address"]}</td>

            <td>{$row["class"]}</td>

            <td>{$row["phone"]}</td>
           
            </tr>
            ";
        }
        $output .= "</table>";
// pagination 
        $sql_total = "SELECT * from student";
        $records = mysqli_query($con,$sql_total) or die("sql query failed");
        $total_records = mysqli_num_rows($records);
        $total_pages = ceil($total_records/$limit_page);
    
        $output .= "<div id='pagination' ><ul class='pagination pagination-lg justify-content-center '>";
        
        for($i=1;$i <= $total_pages; $i++)
        {
            $output .= " 
        

            <li class='page-item shadow-lg'><a class='page-link' id = '{$i}' href='#'>{$i}</a></li>
            ";
        }
        $output .= "</ul></div>";
        
        echo $output;
} 

else{
    echo "<h2>no record found</h2>";
}
?>


