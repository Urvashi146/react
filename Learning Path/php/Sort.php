
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Array</title>
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
        <h1 class="text-center" style="text-decoration:underline">Sorting Array</h1>
  <div class="row">

            <div class="col m-5">
            <h3>Sorting Array</h3>
            <h3>sort() for ascsending order</h3>
        

            
            <pre>
                                <strong>
                                < ?php
                                $name = ["urvashi","barot","girl","boy"];
                        sort($name);
                        $len = count($name);
                           for($i=0;$i<$len;$i++)
                           {
                            echo $name[$i]."< br>";
                           }
                          
                          
                        

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>   
                         

                        <?php
                        $name = ["urvashi","barot","girl","boy"];
                        sort($name);
                        $len = count($name);
                           for($i=0;$i<$len;$i++)
                           {
                            echo $name[$i]."<br>";
                           }
                          
                        
                       ?>

            </div>
            <div class="col m-5">
            <h3>rsort() for desending order</h3>
            <pre>
                                <strong>
                                < ?php
                                $name = ["urvashi","barot","girl","boy"];
                        rsort($name);
                        $len = count($name);
                           for($i=0;$i<$len;$i++)
                           {
                            echo $name[$i]."< br>";
                           }
                          
                          
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $name = ["urvashi","barot","girl","boy"];
                        rsort($name);
                        $len = count($name);
                           for($i=0;$i<$len;$i++)
                           {
                            echo $name[$i]."<br>";
                           }
                          
                        
                        
                        
                       ?>

            </div>
            
        </div>



        
        <div class="row">

<div class="col m-5">

<h3>asort() for ascsending order associative array according to value</h3>



<pre>
                    <strong>
                    < ?php
                    $name = ["a"=>"urvashi","b"=>"barot","c"=>"girl","d"=>"boy"];
            asort($name);
           foreach($name as $x=> $value)
           {
            echo "key=".$x. " value=".$value."< br>"; 
           }
            
              
              
            

           ?>
                    </strong>
                 </pre>      
                 <h2>Output</h2>   
             

            <?php
            $name = ["a"=>"urvashi","b"=>"barot","c"=>"girl","d"=>"boy"];
            asort($name);
           foreach($name as $x=> $value)
           {
            echo "key=".$x. " value=".$value."<br>"; 
           }
            
           ?>

</div>
<div class="col m-5">
<h3>arsort() for desending order associative array according to value</h3>

<pre>
                    <strong>
                    < ?php
                    $name = ["urvashi","barot","girl","boy"];
            rsort($name);
            $len = count($name);
               for($i=0;$i<$len;$i++)
               {
                echo $name[$i]."< br>";
               }
              
              
            
            
            ?>
           
           
                    </strong>
                 </pre> 
                 
                 <h2>Output</h2>     
            <?php
             $name = ["a"=>"urvashi","b"=>"barot","c"=>"girl","d"=>"boy"];
             arsort($name);
            foreach($name as $x=> $value)
            {
             echo "key=".$x. " value=".$value."<br>"; 
            }
             
              
            
            
            
           ?>

</div>

</div>  
        
<div class="row">

<div class="col m-5">

<h3>ksort() for ascsending order associative array according to key</h3>



<pre>
                    <strong>
                    < ?php
                    $name = ["a"=>"urvashi","b"=>"barot","c"=>"girl","d"=>"boy"];
            ksort($name);
           foreach($name as $x=> $value)
           {
            echo "key=".$x. " value=".$value."< br>"; 
           }
            
              
              
            

           ?>
                    </strong>
                 </pre>      
                 <h2>Output</h2>   
             

            <?php
            $name = ["a"=>"urvashi","b"=>"barot","c"=>"girl","d"=>"boy"];
            ksort($name);
           foreach($name as $x=> $value)
           {
            echo "key=".$x. " value=".$value."<br>"; 
           }
            
           ?>

</div>
<div class="col m-5">
<h3>krsort() for desending order associative array according to key</h3>

<pre>
                    <strong>
                    < ?php
                    $name = ["urvashi","barot","girl","boy"];
            krsort($name);
            $len = count($name);
               for($i=0;$i<$len;$i++)
               {
                echo $name[$i]."< br>";
               }
              
              
            
            
            ?>
           
           
                    </strong>
                 </pre> 
                 
                 <h2>Output</h2>     
            <?php
             $name = ["a"=>"urvashi","b"=>"barot","c"=>"girl","d"=>"boy"];
             krsort($name);
            foreach($name as $x=> $value)
            {
             echo "key=".$x. " value=".$value."<br>"; 
            }
             
              
            
            
            
           ?>

</div>

</div>  
        

    </div>





    
</body>
</html>
