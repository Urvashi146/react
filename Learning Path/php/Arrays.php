
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
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
        <h1 class="text-center" style="text-decoration:underline">Arrays</h1>
  <div class="row">

            <div class="col m-5">
            <h3>(1)Simple Array In PHP</h3>
            
            <pre>
                                <strong>
                                < ?php
                                $name = array("urvashi","barot","Androit","Infosol")

                                echo $name[0]."< br>";
                                echo $name[1]."< br>";
                                echo $name[2]."< br>";
                                echo $name[3]."< br>";

                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $name = array("urvashi","barot","Androit","Infosol");

                        echo $name[0]."<br>";
                        echo $name[1]."<br>";
                        echo $name[2]."<br>";
                        echo $name[3]."<br>";

                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>(2)We can also declare like this</h3>
            <pre>
                                <strong>
                                < ?php
                                $nam = ["urvashi","barot","Androit","Infosol"];

                                echo $nam[0]."< br>";
                                echo $nam[1]."< br>";
                                echo $nam[2]."< br>";
                                echo $nam[3]."< br>";
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $nam = ["urvashi","barot","Androit","Infosol"];

                        echo $nam[0]."<br>";
                        echo $nam[1]."<br>";
                        echo $nam[2]."<br>";
                        echo $nam[3]."<br>";
                        
                        
                       ?>

            </div>
            
        </div>
        

        <div class="row">

            <div class="col m-5">
            <h3>To print array there is special print_r function just only for array</h3>
            
            <pre>
                    <strong>
                    < ?php
                     $name = array("urvashi","barot","Androit","Infosol");

                print_r($name);

                ?>
                  </strong>
             </pre>      
         <h2>Output</h2>     
                        <?php
                        $name = array("urvashi","barot","Androit","Infosol");

                        print_r($name);

                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>To decorate this array we use pre element</h3>
            <pre>
                                <strong>
                                < ?php
                                $name1 = array("urvashi","barot","Androit","Infosol");
                        echo "< pre>";
                        print_r($name1);
                     echo "< /pre>"
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $name1 = array("urvashi","barot","Androit","Infosol");
                        echo "<pre>";
                        print_r($name1);
                        echo "</pre>";
                        
                        
                       ?>

            </div>
            
        </div>

        <div class="row">

            <div class="col m-5">
            <h3>(3) Way to declare Array</h3>
            
            <pre>
                    <strong>
                    < ?php
                    $namo[0]="urvashi";
                        $namo[1]="barot";
                        $namo[2]=26;
                        $namo[3]="Androit";
                        $namo[4]="Infosol";
            echo "< pre>";
            print_r($namo);
            echo "< /pre>";
                ?>
                  </strong>
             </pre>      
         <h2>Output</h2>     
                        <?php
                        $namo[0]="urvashi";
                        $namo[1]="barot";
                        $namo[2]=26;
                        $namo[3]="Androit";
                        $namo[4]="Infosol";
            echo "<pre>";
            print_r($namo);
            echo "</pre>";
                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>till here we have declare maximum 4 values but we want to pass more thn thousands of value thn we need to use loops;</h3>
            <pre>
                                <strong>
                                $name2 = array("urvashi","barot","Androit","Infosol");
                        for($i=0;$i<4;$i++)
                        {
                            echo $name2[$i]."< br>";
                        }
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $name2 = array("urvashi","barot","Androit","Infosol");
                        for($i=0;$i<4;$i++)
                        {
                            echo $name2[$i]."<br>";
                        }
                        
                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>To decorate this we use  < ul></h3>
            <pre>
              <strong>
         $name2 = array("urvashi","barot","Androit","Infosol");
            echo"< ul>";
           for($i=0;$i<4;$i++)
         {
          echo "< li> $name2[$i] </ li>";
            }
           echo"</ ul>";
           ?>
                       
                       
            </strong>
            </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $name2 = array("urvashi","barot","Androit","Infosol");
                        echo"<ul>";
                        for($i=0;$i<4;$i++)
                        {
                            echo "<li> $name2[$i] </li>";
                        }
                        echo"</ul>";

                        
                        
                       ?>

            </div>
            
        </div>
        

    </div>





    
</body>
</html>
