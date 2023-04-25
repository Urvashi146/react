
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
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
        <h1 class="text-center" style="text-decoration:underline">Constructor</h1>
          <div class="row">

              <div class="col m-5">
<h3>constructr Example</h3>
                <pre>
                    <strong>
 < ?php
 class about{

public $name, $lastname, $age;
// this is constructor 
function __construct($n,$l,$a)
{
    
    $this->name=$n;
    $this->lastname=$l;
    $this->age=$a;

}

function fulld(){
   echo "fullname is : " .$this->name ." ".
    $this->lastname ."  and age is:  ".$this-> age  ;
    
}    
}



$A1 = new about("urvashi","barot",27);
$A1->fulld();

echo "<br>";

$b1 =new about("welcome","and hello",6);
$b1->fulld();
              
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                    class about{

                            public $name, $lastname, $age;
// this is constructor 
                            function __construct($n,$l,$a)
                            {
                                
                                $this->name=$n;
                                $this->lastname=$l;
                                $this->age=$a;

                            }

                            function fulld(){
                               echo "fullname is : " .$this->name ." ". $this->lastname ."  and age is:  ".$this-> age  ;
                                
                            }    
                    }

                   

                   $A1 = new about("urvashi","barot",27);
                   $A1->fulld();
                  
                   echo "<br>";

                   $b1 =new about("welcome","and hello",6);
                   $b1->fulld();
                
                ?>

              </div>

              <div class="col m-5">
<h3>Another constructr Example </h3>
                <pre>
                    <strong>
 < ?php
 class calculation{
                    public $num1,$num2;

                    function __construct($n1,$n2)
                    {
                        $this->num1 = $n1;
                        $this->num2 = $n2;
                        

                    }

                   
                    function mul()
                    {
                        echo "multiplication of two
                         number is : ".$this->num1 * $this->num2 ."< br>";
                        
                    } 
                    function divi()
                    {
                       echo "Division of two number 
                       is : ". $this->num1 / $this->num2 . "< br>";
                        
                    }

                   }


                $c1= new calculation(40,20);
                
                echo $c1->mul();
                echo $c1->divi();
                echo "output of another oject < br>"
                $c2= new calculation(50,10);
              
                echo $c2->mul();
                echo $c2->divi();

              
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                   class calculation{
                    public $num1,$num2;

                    function __construct($n1,$n2)
                    {
                        $this->num1 = $n1;
                        $this->num2 = $n2;
                        

                    }
                    function mul()
                    {
                        echo "multiplication of two number is : ".$this->num1 * $this->num2 ."<br>";
                        
                    } 
                    function divi()
                    {
                       echo "Division of two number is : ". $this->num1 / $this->num2 . "<br>";
                        
                    }

                   }


                $c1= new calculation(40,20);
              
                echo $c1->mul();
                echo $c1->divi();

          echo "<h2>output of another object</h2> <br>";
                $c2= new calculation(50,10);
              
                echo $c2->mul();
                echo $c2->divi();
                ?>

              </div>
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
