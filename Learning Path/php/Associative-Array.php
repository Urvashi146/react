
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative-Array</title>
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
        <h1 class="text-center" style="text-decoration:underline">Associative-Array</h1>
  <div class="row">

            <div class="col m-5">
            <h3>(1)Associative Array(key=>value)</h3>
            
            <pre>
                                <strong>
                                < ?php
                                $name = array(
                            "name"=>"urvashi",
                            "age"=>26,
                            "surname"=>"barot",
                            "gender"=>"Female"
                        );

                        echo $name["name"]."< br>";
                        echo $name["age"]."< br>";
                        echo $name["surname"]."< br>";
                        echo $name["gender"]."< br>";


                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $name = array(
                            "name"=>"urvashi",
                            "age"=>26,
                            "surname"=>"barot",
                            "gender"=>"Female"
                        );

                        echo $name["name"]."<br>";
                        echo $name["age"]."<br>";
                        echo $name["surname"]."<br>";
                        echo $name["gender"]."<br>";

                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>(2)Associative Array another way</h3>
            <pre>
                                <strong>
                                < ?php
                                $nam = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];


                        echo $nam["name"]."< br>";
                        echo $nam["age"]."< br>";
                        echo $nam["surname"]."< br>";
                        echo $nam["gender"]."< br>";
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

                        echo $nam["name"]."<br>";
                        echo $nam["age"]."<br>";
                        echo $nam["surname"]."<br>";
                        echo $nam["gender"]."<br>";
                        
                        
                       ?>

            </div>
            
        </div>
        

        <div class="row">

            <div class="col m-5">
            <h3>To print array there is special print_r function just only for array</h3>
            
            <pre>
                    <strong>
                    < ?php
                    $nam1 = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                        
                        
                        print_r($nam1);

                ?>
                  </strong>
             </pre>      
         <h2>Output</h2>     
                        <?php
                         $nam1 = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                        
                        
                        print_r($nam1);

                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>To decorate this array we use pre element</h3>
            <pre>
                                <strong>
                                < ?php
                                $nam12 = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                        
                        echo "< pre>";
                        print_r($nam12);
                        echo "</ pre>";
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $nam12 = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                        
                        echo "<pre>";
                        print_r($nam12);
                        echo "</pre>";
                        
                        
                        
                       ?>
                       

            </div>
            
        </div>

        <div class="row">

            <div class="col m-5">
            <h3>we can also use var_dump()</h3>
            
            <pre>
                    <strong>
                    < ?php
                    $nam123 = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                        
                        
                        
                        var_dump($nam123);
                ?>
                  </strong>
             </pre>      
         <h2>Output </h2>     
         
                       <h2>output usinfg var_dump()</h2>
                       <?php
                        $nam123 = [
                            "name"=>"urvashi",
                        "age"=>26,
                        "surname"=>"barot",
                        "gender"=>"Female"
                    ];

                        
                        
                        
                        var_dump($nam123);
                        
                        
                       ?>

            </div>
            
        </div>
        

    </div>





    
</body>
</html>
