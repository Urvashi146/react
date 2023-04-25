
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOPS-PHP-introduction</title>
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
        <h1 class="text-center" style="text-decoration:underline">OOPS-PHP-introduction</h1>
          <div class="row">

              <div class="col m-5">
<h3>This is simple opps concept with class and object</h3>
                <pre>
                    <strong>
                < ?php
                class cal{

public $a, $b, $c;

function sum(){
    $this->c = $this->a + $this->b;
    return $this-> c;
}

function sub()
{
    $this ->c = $this->a - $this->b;
    return $this->c;

}

}

$c1 = new cal();
$c1->a =10;
$c1->b =30;
echo "addition of a + b is : " . $c1->sum();

echo"<br>";

$c2 =new cal();
$c2->a=50;
$c2->b =20;
echo "substraction of a and b is : " . $c2->sub();
                
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                    class cal{

                            public $a, $b, $c;

                            function sum(){
                                $this->c = $this->a + $this->b;
                                return $this-> c;
                            }

                            function sub()
                            {
                                $this ->c = $this->a - $this->b;
                                return $this->c;
                            
                            }

                    }

                    $c1 = new cal();
                    $c1->a =10;
                    $c1->b =30;
                     echo "addition of a + b is : " . $c1->sum();

                     echo"<br>";

                     $c2 =new cal();
                     $c2->a=50;
                     $c2->b =20;
                     echo "substraction of a and b is : " . $c2->sub();
                
                
                
                
                
                ?>

              </div>

              <div class="col m-5">
<h3>Another Example with class and object</h3>
                <pre>
                    <strong>
 < ?php
 class about{
  public $name, $lastname, $age;
 function fulld(){
  $this->fullname = "fullname is : " .$this->name ." ". $this->lastname ."  and age is:  ".$this-> age ;
   return $this->fullname;
   }    
    }

   $f1 =new about();
    $f1->name = "urvashi";
     $f1->lastname = "barot";
    $f1->age = 26;
      echo $f1->fulld();
      echo "< br>";

  $f2 =new about();
   $f2->name = "uri";
    $f2->lastname = "brahmbhatt";
     $f2->age = 25;
     echo $f2->fulld();
                
                ?>
                </strong>

                </pre>
                <h2>Output</h2>
                <?php
                    class about{

                            public $name, $lastname, $age;

                            function fulld(){
                                $this->fullname = "fullname is : " .$this->name ." ". $this->lastname ."  and age is:  ".$this-> age ;
                                return $this->fullname;
                            }    
                    }

                    $f1 =new about();
                    $f1->name = "urvashi";
                    $f1->lastname = "barot";
                    $f1->age = 26;
                    echo $f1->fulld();

                    echo "<br>";

                    $f2 =new about();
                    $f2->name = "uri";
                    $f2->lastname = "brahmbhatt";
                    $f2->age = 25;
                    echo $f2->fulld();
                
                ?>

              </div>
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
