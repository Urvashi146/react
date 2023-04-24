
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inarray-arraySearch</title>
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
        <h1 class="text-center" style="text-decoration:underline">Inarray-arraySearch</h1>
  <div class="row">

            <div class="col m-5">
            <h3>Inarray-arraySearch</h3>
        

            
            <pre>
                                <strong>
                                < ?php
                                $name = ["urvashi","barot","girl","boy"];
                           echo in_array("urvashi",$name);
                           echo"< h2 >output of array_serch it gives index value < /h2>";
                           echo array_search("barot",$name);
                          
                          
                        

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>   
                             <h2>1=true and 0= false</h2>     

                        <?php
                        $name = ["urvashi","barot","girl","boy"];
                           echo in_array("urvashi",$name);
                           echo"<h2>output of array_serch it gives index value </h2>";
                           echo array_search("barot",$name);
                          
                        
                       ?>

            </div>
            <div class="col m-5">
            
            <pre>
                                <strong>
                                < ?php
                                $name = ["name"=>"urvashi",
                        "surname"=>"barot",
                        "gender"=>"girl"];
                       if(in_array('urvashi',$name))
                       {
                        echo " present";
                       }
                       else
                       {
                        echo "not available";

                       }

                       echo"< h2>output of array_serch it gives index key value </ h2>";
                           echo array_search("barot",$name);
                          
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $name = ["name"=>"urvashi",
                        "surname"=>"barot",
                        "gender"=>"girl"];
                       if(in_array('urvashi',$name))
                       {
                        echo " present";
                       }
                       else
                       {
                        echo "not available";

                       }

                       echo"<h2>output of array_serch it gives index key value </h2>";
                           echo array_search("barot",$name);
                          
                        
                        
                        
                       ?>

            </div>
            
        </div>
        
s
        
        

    </div>





    
</body>
</html>
