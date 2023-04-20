<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo & Print</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        
        h2
        {
            color:blue;
        }
        h3
        {
            color:red;
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

<div class="container-fliud ">
<h1 class="text-center" style="text-decoration:underline">Echo & Print</h1>
    <div class="row">
        <div class="col m-5">

         <h1 style="color:green;  text-decoration:underline;">Echo</h1>
         <h2>The PHP echo Statement</h2>
         <pre>
         <strong>
         < ?php
         echo "this is echo statement"; 
         ?>
         </strong>
         </pre>
         <h3>output</h3>
         <?php
          echo "this is echo statement"; 
          ?>
          <h2>The PHP print Statement ...<br>
             you will get same result as echo</h2>
        </div>
        <div class="col m-5"> 
        <h2>The PHP echo Statement with concate(.)</h2>
          <pre>
          <strong>
         < ?php
         echo "one"."two"; 
         ?>
         </strong>
         </pre>
         <h3>output</h3>
         <?php
         echo "one"."two";  
         ?>
         <h2>The PHP print Statement with concate(.)<br> you will get same result as echo</h2>

        


        </div>
    </div>

    <div class="row">
        <div class="col m-5">
         <h2>The PHP echo Statement with HTML tag</h2>
         <pre>
         <strong>
         < ?php
         echo "this is < strong>strong</ strong> tag used within echo statement"; 
         ?>

         echo "< h1>this is "."heading h1</ h1>";
         </strong>
         </pre>
          <h3>output</h3>
         <?php
         echo "this is <strong>strong</strong> tag used within echo statement"; 
         echo "<h1>this is "."heading h1</h1>"; 
           ?>

         <h2>The PHP print Statement ..... you will get same result as echo</h2>
        </div>

        <div class="col m-5">
            <h2>The PHP echo Statement with Numeric value</h2>
         <pre>
          <strong>
          < ?php
           echo 1234567
           echo 12.34567

          ?>
          </strong>
         </pre>
         <h3>output</h3>
         ?php
         echo 1234567;
          echo "<br>";
          echo 12.34567;
          ?>
         <h2>The PHP print Statement ..... you will get same result as echo</h2>

        </div>
    </div>
<div class="row">
    <div class="col m-5">
         <h2>The PHP echo Statement with comma(,)</h2>
         <pre>
         <strong>
         < ?php
        echo "one","two"; 
        ?>
        </strong>
      </pre>
      <h3>output</h3>
      <?php
      echo "one","two";  
      ?>
    </div>
        <div class="col m-5">
         <h2>The PHP print Statement with (,) you will not get same result as echo becuse print not allow to pass multiple parameter</h2>
           <pre>
         <strong>
         < ?php
         echo "one","two"; 
         ?>
         </strong>
         </pre>
           <h3>output</h3>

          <h3>Parse error: syntax error, unexpected ',' in /Users/aimm2301/Sites/frontend/Learning Path/php/echo-print.php on line 49</h3>

        </div>
    </div>
</div>



    
</body>
</html>