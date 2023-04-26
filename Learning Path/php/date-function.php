
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Function</title>
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
        <h1 class="text-center" style="text-decoration:underline">Date Function</h1>
          <div class="row">

              <div class="col m-5">
<h3>Date Function</h3>
                
                <h2>Output</h2>
                <?php
                echo" date('d')"."<br>";
                echo "today is ".date("d")."<br><br>";
                echo" date('jS')"."<br>";
                echo "today is ".date("jS")."<br><br>";
                echo" date('F')"."<br>";
                echo "today is ".date("F")."<br><br>";
                echo" date('m')"."<br>";
                echo "today is ".date("m")."<br><br>";
                echo" date('n')"."<br>";
                echo "today is ".date("n")."<br><br>";
               
                echo" date('M')"."<br>";
                echo "today is ".date("M")."<br><br>";
                
                echo" date('d/m/Y')"."<br>";
                echo "Full date is ".date("d/m/Y")."<br><br>";
                echo" date('d-m-Y')"."<br>";
                echo "Full date ".date("d-m-Y")."<br><br>";
                echo" date('l')"."<br>";
                echo "today is ".date("l")."<br><br>";
                echo" date('N')"."<br>";
                echo "week day is ".date("N")."<br><br>";
                echo" date('w')"."<br>";
                echo "week day is ".date("w")."<br><br>";
                echo" date('z')"."<br>";
                echo " day is ".date("z")."<br><br>";
                echo" date('W')"."<br>";
                echo "week of the year is ".date("W")."<br><br>";
                echo" date('t')"."<br>";
                echo "day of the month is ".date("t")."<br><br>";
                echo" date('L')"."<br>";
                echo "is this a leap year ".date("L")."<br><br>";












               
                    
                
                ?>

              </div>

            

               

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
