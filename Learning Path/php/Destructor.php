
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destructor</title>
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
        <h1 class="text-center" style="text-decoration:underline">Destructor</h1>
          <div class="row">

              <div class="col m-5">
<h3>Destructr Example</h3>
                <pre>
                    <strong>
 < ?php
 class about{

    //    this is constructor
                            function __construct()
                            {
                                echo "constructor";
                                
                            }

                            function fulld(){
                               echo "this is function" ;
                                
                            }   
                            // this is desructor   
                            function __destruct()
                            {
                                echo "destructor";
                                
                            }
                    }

                   

                   $A1 = new about();
                   $A1->fulld();
              
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                    class about{

                        //    this is constructor

                            function __construct()
                            {
                                echo "constructor <br>";
                                
                            }

                            function fulld(){
                               echo "this is function <br>" ;
                                
                            }   
                            // this is desructor  
                            function __destruct()
                            {
                                echo "destructor <br>";
                                
                            }
                    }

                   

                   $A1 = new about();
                   $A1->fulld();
                  
                   
                
                ?>

              </div>

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
