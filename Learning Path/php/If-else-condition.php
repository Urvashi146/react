
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else-condition</title>
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
        <h1 class="text-center" style="text-decoration:underline">If-else-condition</h1>
       

        <div class="row">
            <div class="col m-5">

                        <h1 style="color:green;  text-decoration:underline;">Flot</h1>
                                                
                        <pre>
                        <strong>
                        < ?php
                        $a=10;
                        $b=20;
                        if($a<$b)
                        {
                            echo"B is bigger";
                        }
                        else
                        {
                            echo"A   is bigger";

                        }
                        ?>
                        </strong>
                        </pre>
                        <h3>output</h3>
                        <?php
                        $a=10;
                        $b=20;
                        if($a<$b)
                        {
                            echo"B is bigger";
                        }
                        else
                        {
                            echo"A   is bigger";

                        }
                        ?>
                        <pre>
                            <strong>
                            $name="unkown";
                        $gender="Female";
                        if($gender=="male")
                        {
                            echo "hello mr.".$name;
                        }
                        else
                        {
                            echo "hello miss.".$name;
                            
                        }
                            </strong>
                        </pre>
                        
                        <?php
                        $name="unkown";
                        $gender="Female";
                        if($gender=="male")
                        {
                            echo "hello mr.".$name;
                        }
                        else
                        {
                            echo "hello miss.".$name;
                            
                        }
                       ?>
            </div>
        </div>

    </div>





    
</body>
</html>
