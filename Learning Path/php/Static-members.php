
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Members</title>
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
        <h1 class="text-center" style="text-decoration:underline">Static Members</h1>
          <div class="row">

              <div class="col m-5">
<h3>Static Members Example</h3>
                <pre>
                    <strong>
                    < ?php


                    class a1
                {
                    public static $name="urvashi";
                    public static function b1()    
                    {
                        echo self::$name;

                    }
                } 

                echo  a1::$name;
                a1 :: b1();
    

?>
                
                </strong>

                </pre>
                <h2>Output</h2>
                <?php

                class a1
                {
                    public static $name="urvashi";
                    public static function b1()    
                    {
                        echo self::$name;

                    }
                } 

                echo  a1::$name;
                a1 :: b1();
                    
                
                ?>

              </div>

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
