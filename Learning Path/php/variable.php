<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
        h2
        {
            color:blue;
        }
        h3
        {
            color:red;
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
        <h1 class="text-center" style="text-decoration:underline">$ Variables $</h1>
        <div class="row ">
            <div class="col m-5">
              <h1 style="color:green;  text-decoration:underline;">Variable</h1>
                           
                <pre>
                <strong>
                 < ?php
                 $a= "Urvashi";
                 echo $a;
                ?>
                 </strong>
                </pre>
             <h3>output</h3>
            <?php
            $a= "Urvashi";
           echo $a;
            ?>
            </div> 

            <div class="col m-5">
             <h1 style="color:green;  text-decoration:underline;">Concate two variable</h1>
                         
                                <pre>
                            <strong>
                            < ?php
                            $a= "Urvashi";
                            $b= "Barot";
                            echo $a . $b;
                            ?>
                            </strong>
                        </pre>
                        <h3>output</h3>
                    <?php
                    $a= "Urvashi";
                    $b= "Barot";
                    echo $a . $b;
                    ?>
            </div>
        </div>



        <div class="row">
            <div class="col m-5 ">
                <h1 style="color:green;  text-decoration:underline;">Concate variable and string</h1>
                           
                    <pre>
                 <strong>
                <$a= "Urvashi";
                $b= "Barot";
                echo "Hello and Welcome"." " .$a ." " . $b ."To PHP world!";
                 ?>
                 </strong>
                /pre>
                <h3>output</h3>
                <?php
                $a= "Urvashi";
                $b= "Barot";
                echo "Hello and Welcome"." " .$a ." " . $b ."To PHP world!";
                ?>
            </div>
            <div class="col m-5">
             <h1 style="color:green;  text-decoration:underline;">variable with numeric value</h1>
            
                 <pre>
                <strong>
                < ?php
                $a= 2023;
                echo $a;
                ?>
                </strong>
                </pre>
                <h3>output</h3>
                <?php
                 $a= 2023;
                echo $a;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col m-5 ">
                <h1 style="color:green;  text-decoration:underline;">Concate variable with numeric value</h1>
                           
                    <pre>
                 <strong>
                < ?php 
                $a= 2023;
                $b=304;
                echo "this is var a"." ".$a. "this is var a".$b;
                 ?>
                 </strong>
                /pre>
                <h3>output</h3>
                <?php
                $a= 2023;
                $b=304;
                echo "this is var a"."  ".$a." ". "this is var  ". "  ".$b;
                ?>
            </div>
            <div class="col m-5">
             <h1 style="color:green;  text-decoration:underline;">Add operation with variable</h1>
            
                 <pre>
                <strong>
                < ?php
                $a= 2023;
                 $b= 2022;
                echo $a + $b;
                ?>
                </strong>
                </pre>
                <h3>output</h3>
                <?php
                 $a= 2023;
                 $b= 2022;
                echo $a + $b;
                ?>
            </div>
        </div>
    </div>





    
</body>
</html>