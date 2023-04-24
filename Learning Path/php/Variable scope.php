
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable scope</title>
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
        <h1 class="text-center" style="text-decoration:underline">Variable scope</h1>
  <div class="row">

            <div class="col m-5">
            <h3>local Variable</h3>
            
            <pre>
                                <strong>
                                < ?php
                                function v1()
                        {
                           
                            $var1 = 10;
                            echo "this is local variable var1: $var1";
                           
                        }
                        v1();

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        function v1()
                        {
                           
                            $var1 = 10;
                            echo "this is local variable var1: $var1";
                           
                        }
                        v1();
                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>Global Variable</h3>
            <pre>
                                <strong>
                                < ?php
                                $var2=15;

                        function v2()
                        {
                           
                            echo "this is global-i variable var2: $var2";
                           
                        }
                        echo "this is global-o variable var2: $var2";
                        v2();
                        ?>
                        <h3>if we declare like abouve it will give erroe of undefine variable</h3>
                        <h4>Notice: Undefined variable: var2 in /Users/aimm2301/Sites/frontend/Learning Path/php/Variable scope.php on line 96
this is global-i variable var2:</h4>
                       
                                </strong>
                             </pre> 
                             <h3>So we can use global keyword to declare global varible</h3>  
                             <pre>
                                <strong>
                                < ?php
                                $var2=15;

                        function v2()
                        {
                           global $var2;
                            echo "this is global-inside variable var2: $var2 < br> ";
                           
                        }
                        echo "this is global-outside variable var2: $var2";
                        v2();
                        
                        ?>
                        
                       
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $var2=15;

                        function v2()
                        {
                           global $var2;
                            echo "this is global-inside variable var2: $var2 <br> ";
                           
                        }
                        echo "this is global-outside variable var2: $var2";
                        v2();
                        
                        
                       ?>

            </div>
            
        </div>
        

    </div>





    
</body>
</html>
