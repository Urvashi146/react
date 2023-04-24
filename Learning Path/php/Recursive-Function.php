
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursive-Function</title>
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
        <h1 class="text-center" style="text-decoration:underline">Recursive-Function</h1>
  <div class="row">

            <div class="col m-5">
            <h3>Function inside function is Recursive-Function(works as loop)</h3>
            
            <pre>
                                <strong>
                                < ?php
                                function rec($num)
                        {
                            if($num<=5)
                            {
                                echo "number is $num"."<br>";
                                rec($num + 1);
                            }
                           
                        }
                        rec(1);
                       

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        function rec($num)
                        {
                            if($num<=5)
                            {
                                echo "number is $num"."<br>";
                                rec($num + 1);
                            }
                           
                        }
                        rec(1);
                       ?>

            </div>
            <div class="col m-5">
             <h3>Find factorial using  Recursive function</h3>
            <pre>
                                <strong>
                                < ?php
                                function r1($number)
                        {
                            if($number == 0)
                            {
                                return 1;
                            }else{
                                return ($number * r1($number - 1));
                            }

                        }
                        echo r1(6);
                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        function r1($number)
                        {
                            if($number == 0)
                            {
                                return 1;
                            }else{
                                return ($number * r1($number - 1));
                            }

                        }
                        echo r1(6);
                        
                       ?>

            </div>
            
        </div>
        

    </div>





    
</body>
</html>
