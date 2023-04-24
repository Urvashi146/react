
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Post-Request</title>
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
        <h1 class="text-center" style="text-decoration:underline">Get-Post-Request</h1>
          <div class="row">

              <div class="col m-5">
                <form action="#actionpage" method="Get">
                name:<input type="text" name="name"><br>
                age:<input type="text" name="age"><br>
                <input type="submit" name="submit"><br>

    </form>
               </div>

               

               <div class="col m-5" id="actionpage">
               <h2>Using get</h2>

                
               <?php
                echo "<pre>";
                print_r($_GET);
                echo "</pre>";

                echo $_GET['name'];
                echo "<br>";
                echo $_GET['age'];


                
                ?>  
                </div>
         </div>
         <div class="row">
         <div class="col m-5" >
         <form action="#actionpage1" method="post">
                name:<input type="text" name="name"><br>
                age:<input type="text" name="age"><br>
                <input type="submit" name="submit"><br>

    </form>
                

               </div>
               <div class="col m-5" id="actionpage1">
                <h2>Using post</h2>
               <?php
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";

                echo $_POST['name'];
                echo "<br>";
                echo $_POST['age'];
                
                ?>  
                

               </div>
         </div>

         <div class="row">
         <div class="col m-5" >
         <form action="#actionpage2" method="post">
                name:<input type="text" name="name"><br>
                age:<input type="text" name="age"><br>
                <input type="submit" name="submit"><br>

    </form>
                

               </div>
               <div class="col m-5" id="actionpage2">
                <h2>Using post</h2>
               <?php
                echo "<pre>";
                print_r($_REQUEST);
                echo "</pre>";

                echo $_REQUEST['name'];
                echo "<br>";
                echo $_REQUEST['age'];
                
                ?>  
                

               </div>
         </div>
            
            

    </div>





    
</body>
</html>
