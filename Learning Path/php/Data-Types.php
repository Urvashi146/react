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
        <h1 class="text-center" style="text-decoration:underline">Data Type</h1>
        <div class="row ">
            <!-- integer  -->
            <div class="col m-5">
              <h1 style="color:green;  text-decoration:underline;">Integer</h1>
                           
                <pre>
                <strong>
                 < ?php
                 $a= 10;
                echo $a ."< br>";
                //  var_dump is used to see data type 
                var_dump($a);
                ?>
                 </strong>
                </pre>
              <h3>output</h3>
             <?php
             $a= 10;
             echo $a ."<br>";
             //  var_dump is used to see data type 
             var_dump($a);
             ?>
              

            
            </div>

            <!-- flot  -->
            <div class="col m-5">
              <h1 style="color:green;  text-decoration:underline;">Flot</h1>
                           
                <pre>
                <strong>
                 < ?php
                 $a= 10.23;
                echo $a ."< br>";
                var_dump($a);
                ?>
                 </strong>
                </pre>
              <h3>output</h3>
             <?php
             $a= 10.23;
             echo $a ."<br>";
              var_dump($a);
             ?>
             </div>

        </div>



        <div class="row">
         <div class="col m-5">
            <h1 style="color:green;  text-decoration:underline;">String</h1>
                           
                           <pre>
                           <strong>
                            < ?php
                            $a= "urvashi";
                           echo $a ."< br>";
                           var_dump($a);
                           ?>
                            </strong>
                           </pre>
                         <h3>output</h3>
                        <?php
                        $a= "urvashi";
                        echo $a ."<br>";
                         var_dump($a);
                        ?>
         </div>

            
            <div class="col m-5">

            <h1 style="color:green;  text-decoration:underline;">Boolean</h1>
                           
                           <pre>
                           <strong>
                            < ?php
                            $a= true;
                           echo $a ."< br>";
                           var_dump($a);
                           ?>
                            </strong>
                           </pre>
                         <h3>output</h3>
                        <?php
                        $a= true;
                        echo $a ."<br>";
                         var_dump($a);
                        ?>
            </div>
        </div>


        <div class="row">
            <div class="col m-5">
            <h1 style="color:green;  text-decoration:underline;">Object</h1>
                           
                           <pre>
                           <strong>
                            < ?php
                            $a= array("urvashi","barot","namsharan");
                            echo $a ."<br>";
                           var_dump($a);
                           ?>
                            </strong>
                           </pre>
                         <h3>output</h3>
                         <h5>it will show error because right way to print array is $a[1] and after error it disply whole array</h5>
                        <?php
                        $a= array("urvashi","barot","namsharan");
                        echo $a ."<br>";
                         var_dump($a);
                        ?>
            </div>
            <div class="col m-5">
            <h1 style="color:green;  text-decoration:underline;">null</h1>
                           
                           <pre>
                           <strong>
                            < ?php
                            $a= null;
                            echo $a ."<br>";
                           var_dump($a);
                           ?>
                            </strong>
                           </pre>
                         <h3>output</h3>
                        <?php
                        $a= null;
                        echo $a ."<br>";
                         var_dump($a);
                        ?>

            </div>
        </div>
    </div>





    
</body>
</html>