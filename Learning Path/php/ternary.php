
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch- Condition</title>
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
        <h1 class="text-center" style="text-decoration:underline">Switch condition</h1>
       

        <div class="row">
            <div class="col m-5">

                       
                             <pre>
                                <strong>
                                < ?php
                        $a=20;
                        ($a>30)? $z="grater ":$z="smaller";
                        echo $z;
                        
                       ?>
                      
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $a=20;
                        ($a>30)? $z="grater ":$z="smaller";
                        echo $z;
                        
                       ?>
</div>
<div class ="col m-5">
    <h3>You can also declare like this</h3>
<pre>
    <strong>
    < ?php
$a=20;
$z= ($a>30)? "grater" : "smaller";
echo $z;
?>
    </strong>
</pre>
<h2>Output</h2>
<?php
$a=20;
$z= ($a>30)? "grater" : "smaller";
echo $z;
?>
  

            </div>
        </div>


        <div class="row">
            <div class="col m-5">
            <h3>You can also without ()</h3>
<pre>
    <strong>
    < ?php
    $a=20;
$z= $a>30? "grater" : "smaller";
echo $z;
?>
    </strong>
</pre>
<h2>Output</h2>
<?php
$a=20;
$z= $a>30? "grater" : "smaller";
echo $z;
?>
  

            </div>
            <div class="col m-5">
            <h2>You can concate also</h2>
<pre>
    <strong>
    < ?php
    $a=20;
    $z= "value of a is  "." ".($a>30? "grater" : "smaller");    
echo $z;
?>
    </strong>
</pre>
<h3>Output</h3>
<?php
$a=20;
$z= "value of a is". " ".($a>30? "grater" : "smaller");
echo $z;
?>
            </div>
        </div>

    </div>





    
</body>
</html>
