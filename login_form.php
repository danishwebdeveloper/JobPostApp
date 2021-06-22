<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="login_style.css" rel="stylesheet" type="text/css"/>

<!------ Include the above in your HEAD tag ---------->

<?php

include 'db_connection.php';
include 'links.php';

?>


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
<!--      <i class="fas fa-sign-in-alt"></i>-->
        <img src="images/login_form_image.jpg"  alt="login image"/>
    </div>

    <!-- Login Form -->
    <form action="form_display.php" method="POST">
        <input type="text" id="login" class="fadeIn second" name="email" placeholder="login">
      <input type="text" id="password" class="fadeIn third" name="pass" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="submit_form" value="LOG IN">
    </form>
    

    <!-- Remind Password -->
    
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
  
  </div>
</div>