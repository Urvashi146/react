
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
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
        <h1 class="text-center" style="text-decoration:underline">$_SERVER</h1>
          <div class="row">

              <div class="col m-5">
                <form action="#actionpage" method="post">
                name:<input type="text" name="name"><br>
                age:<input type="text" name="age"><br>
                <input type="submit" name="submit"><br>

    </form>
    <?php
    // this is to print output on same page and need to declare <?php echo $_SERVER['PHP_SELF']? > in form action 

    // if(isset($_POST['submit']))
    // {
    //  echo $_POST['name']."<br>";
    //  echo $_POST['age'];

    // }
    ?>
               </div>

               

               <div class="col m-5" id="actionpage">
               <h2>Using get</h2>

                
               <?php
               

                echo"<h2>Using $ server</h2>";

                echo "<pre>";
                print_r($_SERVER);
                echo "</pre>";

               

              


                
                ?>  
                </div>
         </div>
         
       
            
            

    </div>





    
</body>
</html>
