<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="/Users/aimm2301/Sites/frontend/login/style.css">
<?php include 'db.php';?>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <!-- <img src="icons8-login-10.png" id="icon" alt="User Icon" />-->
      <h3 style="color: rgb(0, 217, 255);">Log In</h3>
    </div>

    <!-- Login Form -->
    <form>
      <input type="text" id="Fname" class="fadeIn second" name="fname" placeholder="First Name">
      <input type="text" id="last Name" class="fadeIn third" name="lname" placeholder="Last Name">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>      