
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count&sizeof-array</title>
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
        <h1 class="text-center" style="text-decoration:underline">Count&sizeof-array</h1>
  <div class="row">

            <div class="col m-5">
            <h3>Count&sizeof-array</h3>
            <h3>Count&sizeof both work same</h3>

            
            <pre>
                                <strong>
                                < ?php
                                $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"],
                            

                    ];
                    echo count($name);
                          
                        

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"],
                            

                    ];
                            echo count($name);
                          
                        
                       ?>

            </div>
            <div class="col m-5">
            
            <pre>
                                <strong>
                                < ?php
                                $name = [1,2,2,23,3,3,4,4,4,42,2];
                       echo sizeof($name);
                          
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                         $name = [1,2,2,23,3,3,4,4,4,42,2];
                       echo sizeof($name);
                          
                        
                        
                        
                       ?>

            </div>
            
        </div>
        
<div class="row">
    <div class="col m-5">
    <h3>if want to see size of nested array then</h3>
            <pre>
                                <strong>
                                < ?php
                                $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"],
                            

                    ];
                            echo count($name['urvashi'],1);
                          
                          
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>   
                             <h2>urvashi has 3 value</h2>     

                        <?php
                         $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"],
                            

                    ];
                            echo count($name['urvashi'],1);
                          
                          
                        
                        
                        
                       ?>

    </div>
</div>
        
        

    </div>





    
</body>
</html>
