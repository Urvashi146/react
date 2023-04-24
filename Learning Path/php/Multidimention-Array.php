
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimention-Array</title>
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
        <h1 class="text-center" style="text-decoration:underline">Multidimention-Array</h1>
  <div class="row">

            <div class="col m-5">
            <h3>(1)Multidimention-Array</h3>
            
            <pre>
                                <strong>
                                < ?php
                                $name = array(
                            array("urvashi",26,"barot","female"),
                            array("urvashi",26,"barot","female"),
                            array("urvashi",26,"barot","female"),
                            array("urvashi",26,"barot","female")
                        );
                            echo "< pre>";
                           print_r($name)."< br>";
                           echo "</ pre>";


                       ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $name = array(
                            array("urvashi",26,"barot","female"),
                            array("urvashi",26,"barot","female"),
                            array("urvashi",26,"barot","female"),
                            array("urvashi",26,"barot","female")
                        );
                            echo "<pre>";
                           print_r($name)."<br>";
                           echo "</pre>";
                          
                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>(2)Multidimention Array another way</h3>
            <pre>
                                <strong>
                                < ?php
                                $nam = [
                            ["urvashi",26,"barot","female"],
                            ["urvashi",26,"barot","female"],
                            ["urvashi",26,"barot","female"],
                            ["urvashi",26,"barot","female"]
                    ];
                    echo "< pre>";
                       print_r($nam);
                       echo "/pre>"
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $nam = [
                            ["urvashi",26,"barot","female"],
                            ["urvashi",26,"barot","female"],
                            ["urvashi",26,"barot","female"],
                            ["urvashi",26,"barot","female"]
                    ];
                    echo "<pre>";
                       print_r($nam);
                       echo "/pre>";
                        
                        
                       ?>

            </div>
            
        </div>
        

        <div class="row">

            <div class="col m-5">
            <h3>You can print value through index</h3>
            
            <pre>
                    <strong>
                    < ?php
                    $nam1 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];
                    echo $nam1[0][0]."< br>";
                    echo $nam1[1][0]."< br>";
                    echo $nam1[2][0]."< br>";
                    echo $nam1[3][0]."< br>";

                ?>
                  </strong>
             </pre>      
         <h2>Output</h2>     
                        <?php
                         $nam1 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];
                    echo $nam1[0][0]."<br>";
                    echo $nam1[1][0]."<br>";
                    echo $nam1[2][0]."<br>";
                    echo $nam1[3][0]."<br>";
                    


                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>to declare all vlue at one tme we use for loop</h3>
            <pre>
                                <strong>
                                < ?php
                                $nam12 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];

                        
                        for($row =0;$row<4;$row++)
                        {
                            for($col=0;$col<4;$col++)
                            {
                                echo $nam12[$row][$col]." ";
                            }
                            echo"< br>";
                        }
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $nam12 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];

                        
                        for($row =0;$row<4;$row++)
                        {
                            for($col=0;$col<4;$col++)
                            {
                                echo $nam12[$row][$col]." ";
                            }
                            echo"<br>";
                        }
                        
                        
                        
                       ?>
                       

            </div>
            
        </div>

        <div class="row">

            <div class="col m-5">
            <h3>for-each</h3>
            
            <pre>
                    <strong>
                    < ?php
                    $nam123 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];

                        
                        foreach($nam123 as $value)
                        {
                            foreach($value as $value1)
                            {
                                echo $value1." ";
                            }
                            echo"< br>";
                        }
                ?>
                  </strong>
             </pre>      
         <h2>Output </h2>     
         
                       <h2>output usinfg var_dump()</h2>
                       <?php
                        $nam123 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];

                        
                        foreach($nam123 as $value)
                        {
                            foreach($value as $value1)
                            {
                                echo $value1." ";
                            }
                            echo"<br>";
                        }
                       ?>

            </div>
            <div class="col m-5">
            <h3>for-each with table element</h3>
            
            <pre>
                    <strong>
                    < ?php
                    $nam123 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];

                        echo "< table border='2px' cellpadding='5px' cellspacing='0px'>";
                        echo"< tr>
                        < th>Name</ th>
                        < th>Age</ th>
                        < th>Surname</ th>
                        < th>Gender</ th>
                        </ tr>";
                        foreach($nam123 as $value)
                        {
                            echo "< tr>";
                            foreach($value as $value1)
                            {
                                echo "< td> $value1 </ td>";
                            }
                            echo"</ tr>";
                        }
                        echo "</ table>";
                ?>
                  </strong>
             </pre>      
         <h2>Output </h2>     
         
                     
                       <?php
                        $nam123 = [
                            ["urvashi",26,"barot","female"],
                            ["urva",26,"barot","female"],
                            ["urvas",26,"barot","female"],
                            ["urv",26,"barot","female"]
                    ];

                        echo "<table border='2px' cellpadding='5px' cellspacing='0px'>";
                        echo"<tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Surname</th>
                        <th>Gender</th>
                        </tr>";
                        foreach($nam123 as $value)
                        {
                            echo "<tr>";
                            foreach($value as $value1)
                            {
                                echo "<td> $value1 </td>";
                            }
                            echo"</tr>";
                        }
                        echo "</table>";
                       ?>

            </div>
            
        </div>
        

    </div>





    
</body>
</html>
