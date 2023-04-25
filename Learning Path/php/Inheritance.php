
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
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
        <h1 class="text-center" style="text-decoration:underline">Inheritance</h1>
          <div class="row">

              <div class="col m-5">
<h3>Inheritance Example</h3>
                <pre>
                    <strong>
                    < ?php
                class employee{
                    public $name,$age,$salary;
                    function __construct($n,$a,$s)
                    {
                        $this->name=$n;
                        $this->age=$a;
                        $this->salary=$s;

                    }

                    function info()
                    {
                    
                        echo "< h3>Employee Details</ h3>";
                        echo "Employee name is :". $this->name ."< br>";
                        echo "Employee Age is :". $this->age ."< br>";
                        echo "Employee salary is :". $this->salary ."< br>";

                    }
                }


                class hod extends employee{
                    public $totalsal;
                    public $otheramount=20000;
                    function info()
                    {
                        $this->totalsal = $this->salary + $this->otheramount;

                        echo "< h3>Manager Details</ h3>";
                        echo "Employee name is :". $this->name ." < br>";
                        echo "Employee Age is :". $this->age ."< br>";
                        echo "Employee salary is :". $this->totalsal ."< br>";
                        
                    }
                }

                $e1 =new employee("Urvashi",27,10000);
                $e1->info();

                $e2 = new hod("uri",26,20000);
                $e2->info();
                    
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                class employee{
                    public $name,$age,$salary;
                    function __construct($n,$a,$s)
                    {
                        $this->name=$n;
                        $this->age=$a;
                        $this->salary=$s;

                    }

                    function info()
                    {
                    
                        echo "<h3>Employee Details</h3>";
                        echo "Employee name is :". $this->name ."<br>";
                        echo "Employee Age is :". $this->age ."<br>";
                        echo "Employee salary is :". $this->salary ."<br>";

                    }
                }


                class hod extends employee{
                    public $totalsal;
                    public $otheramount=20000;
                    function info()
                    {
                        $this->totalsal = $this->salary + $this->otheramount;

                        echo "<h3>Manager Details</h3>";
                        echo "Employee name is :". $this->name ."<br>";
                        echo "Employee Age is :". $this->age ."<br>";
                        echo "Employee salary is :". $this->totalsal ."<br>";
                        
                    }
                }

                $e1 =new employee("Urvashi",27,10000);
                $e1->info();

                $e2 = new hod("uri",26,20000);
                $e2->info();
                    
                ?>

              </div>

              <div class="col m-5">
<h3>Another inheritance Example </h3>
                <pre>
                    <strong>
                    < ?php

class cal{
    public $a,$b;
    function __construct($num1,$num2)
    {
        $this->a=$num1;
        $this->b=$num2;

    }

    function mul()
    {
        // $this->c=$this->a * $this->b;
        echo "multiplication of a and b :". $this->a * $this->b . "< br>";
    }
}

class cal1 extends cal{
    
 public $a1=10;
 public $c;

    function mul()
    {
        echo "< h3>This is using inheritane </ h3>";
        $this->c = $this->a  + $this->a1;
        echo "multiplication of a and b :". $this->c * $this->b . "< br>";
       
       
        
    }
}




$c1= new cal(20,10);
$c1->mul();

$c2= new cal1(30,10);
$c2->mul();


   ?>
 
                </strong>

                </pre>
                <h2>Output</h2>
                <?php

                class cal{
                    public $a,$b;
                    function __construct($num1,$num2)
                    {
                        $this->a=$num1;
                        $this->b=$num2;

                    }

                    function mul()
                    {
                        // $this->c=$this->a * $this->b;
                        echo "multiplication of a and b :". $this->a * $this->b . "<br>";
                    }
                }

                class cal1 extends cal{
                    
                 public $a1=10;
                 public $c;

                    function mul()
                    {
                        echo "<h3>This is using inheritane </h3>";
                        $this->c = $this->a  + $this->a1;
                        echo "multiplication of a and b :". $this->c * $this->b . "<br>";
                       
                       
                        
                    }
                }




                $c1= new cal(20,10);
                $c1->mul();

                $c2= new cal1(30,10);
                $c2->mul();


                   ?>

              </div>
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
