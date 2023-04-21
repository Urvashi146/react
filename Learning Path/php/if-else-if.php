
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else-condition</title>
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
        <h1 class="text-center" style="text-decoration:underline">If-else-condition</h1>
       

        <div class="row">
            <div class="col m-5">

                       
                             <pre>
                                <strong>
                                $marks=25;
                        if($marks>=0 && $marks<=35)
                        {
                            echo "fail";
                            
                        }
                        elseif($marks>35 && $marks<=45)
                        {
                            echo "class f";
                        }
                        elseif($marks>=46 && $marks<=55)
                        {
                            echo "class e";
                            
                        }
                        elseif($marks>=56 && $marks<=65)
                        {
                            echo "class d";
                            
                        }
                        elseif($marks>=66 && $marks<=75)
                        {
                            echo "class c";
                            
                        }
                        elseif($marks>=76 && $marks<=85)
                        {
                            echo "class b";
                            
                        }
                        elseif($marks>=86 && $marks<=100)
                        {
                            echo "class a";
                            
                        }
                        else
                        {
                            echo "enter correct number";
                        }
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $marks=25;
                        if($marks>=0 && $marks<=35)
                        {
                            echo "fail";
                            
                        }
                        elseif($marks>35 && $marks<=45)
                        {
                            echo "class f";
                        }
                        elseif($marks>=46 && $marks<=55)
                        {
                            echo "class e";
                            
                        }
                        elseif($marks>=56 && $marks<=65)
                        {
                            echo "class d";
                            
                        }
                        elseif($marks>=66 && $marks<=75)
                        {
                            echo "class c";
                            
                        }
                        elseif($marks>=76 && $marks<=85)
                        {
                            echo "class b";
                            
                        }
                        elseif($marks>=86 && $marks<=100)
                        {
                            echo "class a";
                            
                        }
                        else
                        {
                            echo "enter correct number";
                        }
                       ?>
            </div>
        </div>

    </div>





    
</body>
</html>
