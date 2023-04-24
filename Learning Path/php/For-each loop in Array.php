
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For-each loop in Array</title>
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
        <h1 class="text-center" style="text-decoration:underline">For-each loop in Array</h1>
  <div class="row">

            <div class="col m-5">
            <h3>For-each loop in Array</h3>
            
            <pre>
            <strong>
         < ?php
          $name = array("urvashi",26,"barot","Female");

        foreach($name as $value)
        {
        echo $value."< br>";
        }

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $name = array("urvashi",26,"barot","Female");

                       foreach($name as $value)
                       {
                        echo $value."<br>";
                       }

                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>(2)Associative Array with foreach loop</h3>
            <pre>
                                <strong>
                                < ?php
                                $nam = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                       foreach($nam as $key => $value)
                       {
                        echo "$key = $value"."< br>";
                       }
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $nam = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                       foreach($nam as $key => $value)
                       {
                        echo "$key = $value"."<br>";
                       }
                        
                        
                       ?>

            </div>
            
        </div>
        

        
        </div>
        

    </div>





    
</body>
</html>
