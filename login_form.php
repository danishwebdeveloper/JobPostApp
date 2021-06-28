<?php

session_start();

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="CSS/registration_form_css.css" rel="stylesheet" type="text/css"/>

<!------ Include the above in your HEAD tag ---------->

<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p> 
		<a href="" class="btn btn-block btn-twitter"> <i class="fab fa-gmail"></i>   Login via Gmail</a>
		<a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
	
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" required=""  placeholder="Email ID" type="email">
    </div> <!-- form-group// -->
    
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
	</div>
        <input class="form-control" required="" name="password" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
                                        
     <div class="form-group">
        <button type="submit" name="user_login" class="btn btn-primary btn-block"> LOG IN  </button>
      
        <p class="text-center btn btn-success btn-block">Don't Have an account? <a href="registration_form.php" style="color: white;">Sign Up</a> </p>  
     </div> <!-- form-group// -->                                                                    
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>

<?php

 include 'db_connection.php';
 
    if (isset($_POST['user_login'])){
        $get_email = $_POST['email'];
        $get_pass = $_POST['password'];
        
        
        
        $query = "select * from user_registration where Email='".$get_email."' limit 1";
        
//        var_dump($query);
        
       $res = mysqli_query($connection, $query);
       // var_dump($res);
     
       while ( $rows = mysqli_fetch_assoc($res)) {
          
           $db_email = $rows['Email'];
           $db_pass = $rows['Password'];
           $_SESSION['UserName'] = $rows['FullName'];
           $_SESSION['ID'] = $rows['ID'];
           
           $verify_password = password_verify($get_pass, $db_pass);
           
           if($verify_password && $db_email == $get_email){
         
       header("location:display.php");
      
           }
           else{
               ?>
<script>
    alert("Email Doesn't Same!!!!! Please Write correct email");
</script>

<?php
               echo "not succseffull";
               exit();
           }

}
            
        }



?>