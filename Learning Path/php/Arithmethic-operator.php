<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator</title>
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
        <h1 class="text-center" style="text-decoration:underline">Arithmetic Operator</h1>
       

        <div class="row">
            <div class="col m-5">
            
              
                         <h3>output</h3>
                        <?php
                        $a=10;
                        $b=2;
                        echo "a is:". " ". $a;
                        echo "<br>";
                        echo "b is:". " ". $b;
                        echo "<br>";
                        echo "a + b"."= " . $c= $a + $b;
                        echo "<br>";
                        echo "a * b"." =" . $c= $a * $b;
                        echo "<br>";
                        echo "a / b"." =" . $c= $a / $b;
                        echo "<br>";
                        echo "a ** b"."= " . $c= $a ** $b;
                        echo "<br>";
                        echo "a % b"." =" . $c= $a % $b;
                        echo "<br>";
                        echo "a + b * 2"." =" . $c= $a + $b * 2;
                        echo "<br>";
                        echo "(a + b) * 2"." =" . $c= ($a + $b) * 2;
                        echo "<br>";
                       


                        ?>


            </div>
        </div>

    </div>





    
</body>
</html>