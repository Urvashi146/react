
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Function</title>
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
        <h1 class="text-center" style="text-decoration:underline">Time Function</h1>
          <div class="row">

              <div class="col m-5">
<h3>Time Function</h3>
                
                <h2>Output</h2>
                <?php
                echo" date('h')"."<br>";
                echo "Hour is ".date("h")."<br><br>";

                echo" date('H')"."<br>";
                echo "Hour is ".date("H")."<br><br>";

                echo" date('g')"."<br>";
                echo "Hour is ".date("g")."<br><br>";

                echo" date('G')"."<br>";
                echo "Hour is ".date("G")."<br><br>";

                echo" date('i')"."<br>";
                echo "minute is ".date("i")."<br><br>";

                echo" date('s')"."<br>";
                echo "second is ".date("s")."<br><br>";

                echo" date('A')"."<br>";
                echo "meridiem is ".date("A")."<br><br>";

                echo" date('h:i:sa')"."<br>";
                echo "time is ".date("h:i:s a")."<br><br>";

                echo" date('h:i:sa')"."<br>";
                echo"<h3>bydefult it will take server time and basically server is from Europe in most case</h3>";
                echo "date & time is ".date("d-m-y h:i:s a e")."<br><br>";
                
                echo" date('h:i:sa')"."<br>";
                echo"<h3>bydefult it will take server time and basically server is from Europe in most case so to set it to system time in india</h3>";
                echo'date_default_timezone_set("Asia/Kolkata")'."<br>";
                
                date_default_timezone_set("Asia/Kolkata");
                echo "date & time is ".date("d-m-y h:i:s a e")."<br><br>";

                echo "<h2>mktime and gmttime</h2>";

                echo" day('l', mktime(0,0,0,06,14,1996))"."<br>";
                echo "day is ".date("l", mktime(0,0,0,06,14,1996))."<br><br>";

                echo" date('d-m-Y', mktime(0,0,0,06,14,1996))"."<br>";
                echo "date is ".date("d-m-Y", mktime(0,0,0,06,14,1996))."<br>";
                echo "day is ".date("l", mktime(0,0,0,06,14,1996))."<br><br>";
                













               
                    
                
                ?>

              </div>

            

               

              
                
         </div>
         
       
            
            

    </div>





    
</body>
</html>
