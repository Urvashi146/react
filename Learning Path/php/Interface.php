
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interface</title>
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
        <h1 class="text-center" style="text-decoration:underline">Interface</h1>
        <div class="row">
            <div class="col m-5">
                <h2>Need to Remember three Rules for Interface</h2>
                <h3>(1) Need to declare class as interface using interface keyword.</h3>
                <h3>(2)  need to  just declare mehtod it ...no need to implemet .</h3>
                <h3>(3) Inherit parentclass to child class using Impliment (not extent keyword) key word(allow to mltiple class impliment) and within that claass we impliment abstract method that we declare in parent class.</h3>
                <h2>Note: we can not allow to make object of interface class</h2>
                <h2>no need to declare access modifier(public,protected,private)</h2>
                <h2>also ahve to declare all method of implimented class in derived class</h2>


            </div>
        </div>
          <div class="row">

              <div class="col m-5">
<h3>Interface Example</h3>
                <pre>
                    <strong>
                    < ? php
                interface employee{
                    
                   
                     function name();
                }
                interface employee1{
                    
                   
                    function age();
               }


                class emp2 implements employee, employee1 {
                    function name(){
                        echo"this is name";

                    }

                    function age()
                    {
                        echo"this is age";
                    }
                    public function info()
                    {
                        echo"this is info";
                    }

                }  

                

                $e2 = new emp2();
                $e2->info();
                $e2->age();
                $e2->name();

                    
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                interface employee{
                    
                   
                     function name();
                }
                interface employee1{
                    
                   
                    function age();
               }


                class emp2 implements employee, employee1 {
                    function name(){
                        echo"this is name<br>";

                    }

                    function age()
                    {
                        echo"this is age<br>";
                    }
                    public function info()
                    {
                        echo"this is info<br>";
                    }

                }  

                

                $e2 = new emp2();
                $e2->info();
                $e2->age();
                $e2->name();

                    
                ?>

              </div>

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
