
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Associative Array</title>
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
        <h1 class="text-center" style="text-decoration:underline">Multidimensional Associative Array</h1>
  <div class="row">

            <div class="col m-5">
            <h3>Multidimensional Associative Array</h3>
            
            <pre>
                                <strong>
                                < ?php
                                $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"],
                            

                    ];
                            echo "< pre>";
                           print_r($name)."< br>";
                           echo "</ pre>";
                          
                        

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
                            echo "<pre>";
                           print_r($name)."<br>";
                           echo "</pre>";
                          
                        
                       ?>

            </div>
            <div class="col m-5">
             <h3>(2)Multidimention Array with table element</h3>
            <pre>
                                <strong>
                                < ?php
                                $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"]
                            

                    ];
                        echo "< table border='2px' cellpadding='5px' cellspacind='0'
                        < tr>
                        < th>Name</ th>
                        < th>Surname</ th>
                        < th>age</ th>
                        < th>Gender< /th>

                        </ tr>";
                            foreach($name as $key=>$v1)
                       
                            {
                                echo "< tr>
                                < td>$key</ td>";
                                foreach($v1 as $v2)
                                {
                                    echo "< td> $v2</ td>" ;
                                }
                               echo  "</  tr>";
                            }
                            echo "</ table>";
                          
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                         $name = [
                            "urvashi"=>["barot","26","female"],
                            "kiran"=>["sharma","45","female"],
                            "dharto"=>["shah","33","female"],
                            "shakti"=>["patel","44","female"]
                            

                    ];
                        echo "<table border='2px' cellpadding='5px' cellspacind='0'
                        <tr>
                        <th>Name</th>

                        <th>Surname</th>
                        <th>age</th>
                        <th>Gender</th>

                        </tr>";
                            foreach($name as $key=>$v1)
                       
                            {
                                echo "<tr>
                                <td>$key</td>";
                                foreach($v1 as $v2)
                                {
                                    echo "<td> $v2</td>" ;
                                }
                               echo  "</tr>";
                            }
                            echo "</table>";
                          
                        
                        
                        
                       ?>

            </div>
            
        </div>
        
<div class="row">
    <div class="col m-5">
    <h3>(2)Multidimention associative Array using foreach</h3>
            <pre>
                                <strong>
                                < ?php
                                $reg = [
                            ["urvashi","barot",26],
                            ["urhi","baot",33],
                            ["urshi","bar",24]
                        ];
                        echo "< table border='2px'>";
                        foreach($reg as list($name,$surname,$age))
                        {
                           
                            echo "< tr>< td>$name $surname $age </ td></ tr>";
                        }
                        echo "</ table>";
                          
                        
                        
                        ?>
                       
                       
                                </strong>
                             </pre> 
                             
                             <h2>Output</h2>     
                        <?php
                        $reg = [
                            ["urvashi","barot",26],
                            ["urhi","baot",33],
                            ["urshi","bar",24]
                        ];
                        echo "<table border='2px'>";
                        foreach($reg as list($name,$surname,$age))
                        {
                           
                            echo "<tr><td>$name $surname $age </td></tr>";
                        }
                        echo "</table>";
                          
                        
                        
                        
                       ?>

    </div>
</div>
        
        

    </div>





    
</body>
</html>
