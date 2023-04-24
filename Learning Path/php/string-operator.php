
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string-operator </title>
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
        <h1 class="text-center" style="text-decoration:underline">string-operator</h1>
       

        <div class="row">
            <div class="col m-5">

                       
                             <pre>
                                <strong>
                                    <h4>We can add string without declaring other varable using string opr</h4>
                                < ?php
                                $a= "hello";
                                $a .= "Urvashi";
                                echo $a;
                        
                                ?>
                      
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $a= "hello";
                        $a .= "Urvashi";
                        echo $a;
                        
                       ?>
</div>
<div class ="col m-5">
<pre>
  <strong>
  
   < ?php
   $a= "hello";
    $a .= "Urvashi";
    $a.="how are you";
    echo $a;
    ?>
                      
  </strong>
</pre>      
  <h2>Output</h2>     
    <?php
    $a= "hello";
    $a .= "Urvashi";
    $a.="how are you";
    echo $a;
    ?>    
   
</div>
</div>


        <div class="row">
            <div class="col m-5">
            <pre>
  <strong>
   <h4>We can add string with declaring  varable </h4>
   < ?php
   $a= "hello";
    $z= $a. "Urvashi";
    
    echo $z;
    ?>
                      
  </strong>
</pre>      
  <h2>Output</h2>     
    <?php
    $a= "hello";
    $z= $a. "Urvashi";
    
    echo $z;
    ?> 
            
  

            </div>
            <div class="col m-5">
            <pre>
  <strong>
   <h4>We can also num value.</h4>
   < ?php
   $a= "hello";
    $z= $a. "Urvashi".146;
    
    echo $z;
    ?>
                      
  </strong>
</pre>      
  <h2>Output</h2>     
    <?php
    $a= "hello";
    $z= $a . "Urvashi" . 146;
    echo $z;
    ?>
            
            </div>
        </div>

    </div>





    
</body>
</html>
