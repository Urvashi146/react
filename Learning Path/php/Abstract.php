
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abstract</title>
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
        <h1 class="text-center" style="text-decoration:underline">Abstract</h1>
        <div class="row">
            <div class="col m-5">
                <h2>Need to Remember three Rules for Abstract</h2>
                <h3>(1) Need to declare class as abstract using abstract keyword.</h3>
                <h3>(2) Complusory need to have atleast one abstract method within parent class.so need to just declare it ...no need to implemet .</h3>
                <h3>(3) Inherit parentclass to child class using extend key word and within that claass we impliment abstract method that we declare in parent class.</h3>
                <h2>Note: we can not allow to make object of abstract class.</h2>
            </div>
        </div>
          <div class="row">

              <div class="col m-5">
<h3>Abstract Example</h3>
                <pre>
                    <strong>
                    < ?php
                abstract class employee{
                    
                   
                    abstract protected function info();
                }


                class hod extends employee{
                    public function info()
                    {
                        echo"this is childclass";
                    }

                }  

                

                $e2 = new hod();
                $e2->info();
                    
                ?>
                </strong>

                </pre>
               
            </div>
            <div class="col m-5">
            <h2>Output</h2>
                <?php
                abstract class employee{
                    
                   
                    abstract protected function info();
                }


                class hod extends employee{
                    public function info()
                    {
                        echo"this is childclass";
                    }

                }  

                

                $e2 = new hod();
                $e2->info();
                    
                ?>

              </div>

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
