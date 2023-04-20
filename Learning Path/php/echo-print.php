<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo</title>
    <style>
        pre
        {
            border: 2px solid black;
            width: auto;
        }
        h2
        {
            color:blue;
        }
        h3
        {
            color:red;
        }
    </style>
</head>
<body>
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
<h2>The PHP print Statement ... you will get same result as echo</h2>

<hr>

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




<hr>
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
<h2>The PHP print Statement with concate(.) you will get same result as echo</h2>

<hr>

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

<hr>


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
<?php
 echo 1234567;
 echo "<br>";
 echo 12.34567;
?>
<h2>The PHP print Statement ..... you will get same result as echo</h2>

<hr>
    
</body>
</html>