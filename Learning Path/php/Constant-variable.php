<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datatypes</title>
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
        <h1 class="text-center" style="text-decoration:underline">Constant Variable</h1>
        <h1 class="text-center" style="text-decoration:underline">define(var_nam,value,case-insensitive)</h1>

        <div class="row">
            <div class="col m-5">
            <h2 style="color:green;  text-decoration:underline;">To declare Constant variable we need to use define()</h2>
                           
                           <pre>
                           <strong>
                            < ?php
                            define("con",300);
                            echo con;
                           ?>
                            </strong>
                           </pre>
                         <h3>output</h3>
                        <?php
                        define("con",300);
                        echo con;
                        ?>
            </div>
            <div class="col m-5">
            <h2 style="color:green;  text-decoration:underline;">defining const again throws error</h2>
                           
                           <pre>
                           <strong>
                            < ?php
                            define("con",300);
                            define("con",200);
                            echo con;
                           ?>
                            </strong>
                           </pre>
                         <h3>output</h3>
                        <?php
                        define("con",300);
                        define("con",200);

                        echo con;
                        ?>
            </div>
        </div>

        <div class="row">
            <div class="col m-5">
            <h2 style="color:green;  text-decoration:underline;">
            Add operation in constant
            </h2>
                           
                <pre>
                 <strong>
                  < ?php
                  define("con1",300);
                  $add = con1 + 50;
                   echo $add;
                 ?>
                 </strong>
                 </pre>
                 <h3>output</h3>
                 <?php
                  define("con1",300);
                  $add = con1 + 50;
                   echo $add;
                   ?>
            </div>
        </div>

    </div>





    
</body>
</html>