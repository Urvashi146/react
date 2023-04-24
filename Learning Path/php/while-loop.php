
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While-loop</title>
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
        <h1 class="text-center" style="text-decoration:underline">While-Loop</h1>
       

        <div class="row">
            <div class="col m-5">

                       
                             <pre>
                                <strong>
                                   < ?php
                                   $a=5;
                        while($a<=15)
                        {
                        echo $a .")you are under 15<br>";
                            $a++;
                        }
                        
                      ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $a=5;
                        while($a<=15)
                        {
                            echo $a .")you are under 15<br>";
                            $a++;
                        }
                        
                       ?>
</div>
<div class ="col m-5">
<pre>
                                <strong>
                                   < ?php
                                   $a=15;
                        while($a>=5)
                        {
                        echo $a .")you are under 15<br>";
                            $a--;
                        }
                        
                      ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $a=15;
                        while($a>=5)
                        {
                            echo $a .")you are under 15<br>";
                            $a--;
                        }
                        
                       ?>
</div>
</div>


        <div class="row">
            <div class="col m-5">
                <h4>with ul-li</h4>
            <pre>
                                <strong>
                                   < ?php
                                   $a=15;
                        echo "<ul>";
                        while($a>=5)
                        {
                            echo "<li>".$a ."-you are under 15</li>";
                            $a--;
                        }
                        echo "</ul>";
                      ?>
                                </strong>
                             </pre>      
                             <h2>Output</h2>     
                        <?php
                        $a=15;
                        echo "<ul>";
                        while($a>=5)
                        {
                            echo "<li>".$a ."-you are under 15</li>";
                            $a--;
                        }
                        echo "</ul>";
                       ?>

            </div>
            
        </div>

    </div>





    
</body>
</html>
