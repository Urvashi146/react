
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch- Condition</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
        h2
        {
            color:blue;
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
        <h1 class="text-center" style="text-decoration:underline">Switch condition</h1>
       

        <div class="row">
            <div class="col m-5">

                       
                             <pre>
                                <strong>
                                $day=7;
                        switch($day)
                        {
                            case 1 :
                                echo" Today is Monday";
                                break;

                                case 2 :
                                    echo" Today is tuesday";
                                    break;     
                                    case 3 :
                                        echo" Today is wednesday";
                                        break;
                                        case 4 :
                                            echo" Today is thursday";
                                            break;
                                            case 5 :
                                                echo" Today is friday";
                                                break;
                                                case 6 :
                                                    echo" Today is saturday";
                                                    break;
                                                    case 7 :
                                                        echo" Today is sunday funday";
                                                        break;
                                                        default:
                                                            echo" week have only 7 day so enter correct number between 1to 7";
                                                            break; 
                        }
                        
                      
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $day=7;
                        switch($day)
                        {
                            case 1 :
                                echo" Today is Monday";
                                break;

                                case 2 :
                                    echo" Today is tuesday";
                                    break;     
                                    case 3 :
                                        echo" Today is wednesday";
                                        break;
                                        case 4 :
                                            echo" Today is thursday";
                                            break;
                                            case 5 :
                                                echo" Today is friday";
                                                break;
                                                case 6 :
                                                    echo" Today is saturday";
                                                    break;
                                                    case 7 :
                                                        echo" Today is sunday funday";
                                                        break;
                                                        default:
                                                            echo" week have only 7 day so enter correct number between 1to 7";
                                                            break; 
                        }
                        
                       ?>
</div>
<div class ="col m-5">
<pre>
    <strong>
    $age=9;
switch(true){
    case ($age<=100 && $age>=60):
        echo "you need to take rest";
        break;
        case ($age<=61 && $age>=20):
            echo "you need work hard";
            break;   
            case ($age<=19 && $age>=10):
                echo "you need enjoy this teenage face.";
                break;   
                case ($age<=9 && $age>=1):
                    echo "Do what ever you want to do.";
                    break;
                    case ($age=0):
                        echo "you are not born yet?";
                        break;
                        default:
                        echo "age is not valid";
                        break;
}
    </strong>
</pre>
<h2>Output</h2>
<?php
$age=9;
switch(true){
    case ($age<=100 && $age>=60):
        echo "you need to take rest";
        break;
        case ($age<=61 && $age>=20):
            echo "you need work hard";
            break;   
            case ($age<=19 && $age>=10):
                echo "you need enjoy this teenage face.";
                break;   
                case ($age<=9 && $age>=1):
                    echo "Do what ever you want to do.";
                    break;
                    case ($age=0):
                        echo "you are not born yet?";
                        break;
                        default:
                        echo "age is not valid";
                        break;
}
?>  

            </div>
        </div>

    </div>





    
</body>
</html>
