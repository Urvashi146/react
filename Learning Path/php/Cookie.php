<?php
$cookie_name = "user";
$cookie_value = "urvashi is here";

setcookie($cookie_name,$cookie_value,time()+ (86400 * 30), "/");


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
        <h1 class="text-center" style="text-decoration:underline">Cookie</h1>
  <div class="row">

            <div class="col m-5">
            <h3>Cookie</h3>
            

            
            <pre>
                                <strong>
  before html start... 
 < ?php
$cookie_name = "user";
$cookie_value = "urvashi is here";

setcookie($cookie_name,$cookie_value,time()+ 60, "/");


?>

This is in body potion
 < ?php
  if(!isset($_COOKIE[$cookie_name]))
     {
         echo "Cookie not set";
      }
    else{
        echo $_COOKIE[$cookie_name];
         }
     ?>
                             </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        
                        //   echo $_COOKIE[$cookie_name];
                        if(!isset($_COOKIE[$cookie_name]))
                        {
                            
                            echo "Cookie not set";
                        }
                        else{
                            echo $_COOKIE[$cookie_name];
                        }
                        
                       ?>

            </div>
          
</div>
        
        

    </div>





    
</body>
</html>
