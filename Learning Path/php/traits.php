
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
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
        <h1 class="text-center" style="text-decoration:underline">Traits</h1>
          <div class="row">

              <div class="col m-5">
<h3>Traits Example</h3>
                <pre>
                    <strong>
                    < ?php

trait h1{
 function hi()
 {
     echo "this is hi function";
 }

}

class c1
{
 use h1; 
}

$o1= new c1;
$o1->hi(); 
     
 
 ?>

                
                </strong>

                </pre>
                <h2>Output</h2>
                <?php

               trait h1{
                function hi()
                {
                    echo "this is hi function";
                }

               }

               class c1
               {
                use h1; 
               }

               class c2
               {
                use h1; 
               }

               $o1= new c1;
               $o1->hi(); 
               echo "<h2>This is anoyher object in which i used trait</h2>";
               $o2= new c2;
               $o2->hi(); 
                    
                
                ?>

              </div>

            

                <div class="col m-5">
                <h3>Traits Example</h3>
                <pre>
                    <strong>
                                < ?php

            trait h2{
            function hi()
            {
                echo "this is hi function";
            }

            }

            trait b2{
                function bi()
                {
                    echo "this is bi function";
                }

            }

            class c3
            {
            use h2,b2; 
            }

            class c4
            {
            use h1; 
            }

            $o3= new c3;
            $o3->hi();
            echo"< br>";
            $o3->bi(); 

            echo "< h2>This is anoyher object in which i used trait</ h2>";
            $o2= new c2;
            $o2->hi(); 
                

            ?>


                
                </strong>

                </pre>
                 <h2>used 2 trait</h2>
                <?php

                trait h2{
                function hi()
                {
                    echo "this is hi function";
                }

                }

                trait b2{
                    function bi()
                    {
                        echo "this is bi function";
                    }
                
                }

                class c3
                {
                use h2,b2; 
                }

                class c4
                {
                use h1; 
                }

                $o3= new c3;
                $o3->hi();
                echo"<br>";
                $o3->bi(); 

                echo "<h2>This is anoyher object in which i used trait</h2>";
                $o2= new c2;
                $o2->hi(); 
                    
                
                ?>

                </div>

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
