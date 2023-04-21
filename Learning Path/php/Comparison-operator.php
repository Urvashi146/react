
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison-operater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
        h2
        {
            color:blue;
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
        <h1 class="text-center" style="text-decoration:underline">Comparison-operater</h1>
       

        <div class="row">
            <div class="col m-5">
            
                         <h3 style="color:red">output</h3>
                        <?php
                        
                        $num1=10;
                        $num2=20;

                        echo "num1=10<br>";
                        echo "num2=20";

                    echo"<h3>num1==num2</h3>" ;
                     var_dump($num1==$num2);
                      echo "<br>";

                      echo"<h3>num1===num2</h3>" ;
                       var_dump($num1===$num2);
                      echo "<br>";

                      echo"<h3>num1!=num2</h3>" ;
                      var_dump($num1!=$num2);
                     echo "<br>";

                     echo"<h3>num1!==num2</h3>" ;
                      var_dump($num1!==$num2);
                     echo "<br>";

                     echo"<h3>num1<>num2</h3>" ;
                      var_dump($num1<>$num2);
                     echo "<br>"; 
                        ?>
            </div>
            <div class="col m-5">
                <?php

                        echo"<h3>num1<=num2</h3>" ;
                        var_dump($num1<=$num2);
                        echo "<br>";

                        echo"<h3>num1>=num2</h3>" ;
                        var_dump($num1>=$num2);
                        echo "<br>";

                        echo"<h3>num1<num2</h3>" ;
                        var_dump($num1<$num2);
                        echo "<br>";    

                        echo"<h3> num1>num2 </h3>" ;
                        var_dump($num1>$num2);
                        echo "<br>";

                        echo"<h3> num1<=>num2 </h3>" ;
                        var_dump($num1<=>$num2);
                        echo "<br>";
                ?>
            </div>
        </div>

    </div>





    
</body>
</html>
