<?php 
session_start();
$_SESSION['name']="user1";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
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
        .row
        {
            border:3px solid green;
            margin:5px;
        }
        .col
        {
            border:2px solid lightblue;
            box-shadow: 0px 0px 30px gray;
        }
    </style>
</head>
<body>
<div class="container-fluid">
        <h1 class="text-center "><u>Session</u></h1>
        <div class="row border border-success border-3 rounded-5 m-1">
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <pre><strong>
                      < ?php 
                        session_start();
                        $_SESSION['name']="user1";

                        ?>

                </strong></pre>
            </div>
            <div class="col border border-1 border-info shadow-lg shadow-dark m-5">
                <?php
                echo "session has been set.<br>";
                print_r($_SESSION); 
                echo" <br>session name is :".$_SESSION['name'];
                ?>
            
            </div>
       </div>
 </div>





    
</body>
</html>
