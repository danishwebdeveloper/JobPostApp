
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="styles.css" rel="stylesheet" type="text/css"/>

<!------ Include the above in your HEAD tag ---------->


<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please fill the form carefully, May it change your life! Viel Glück</p>
                        <a href="login_form.php"> <input type="text" name="" value="Login"/></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Apply as a Web Developer</h3>
                             
                                
                                <form action="" method="POST" >
                                    
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user_name" placeholder="Full Name *" value="" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="user_email" placeholder="Email *" value="" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="user_password" placeholder="Password *" value="" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm_password"  placeholder="Confirm Password *" value="" required="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="u_gender" value="male" required="" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="u_gender" value="female" required="">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="text" required="" minlength="10" maxlength="10" name="user_cellphone" class="form-control" placeholder="Your Phone *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="user_qualification" placeholder="Enter Qualification *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="user_reference" placeholder="Enter Reference *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" required="" name="job_type">
                                                <option class="hidden" name="job_type" required="" selected disabled>Please select a job type</option>
                                                <option required="">Web Developer</option>
                                                <option required="">Andriod Developer</option>
                                                <option required="">Java Developer</option>
                                                <option required=""> Laravel Developer </option>
                                            </select>
                                        </div>
                                        <input type="submit" class="btnRegister" name="submit_form" value="Register"/>
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
include 'db_connection.php';


if(isset ($_POST['submit_form'])){
    
    $u_name = $_POST['user_name'];
    $u_email = $_POST['user_email'];
    $u_password = $_POST['user_password'];
    $u_ConfirmPassword = $_POST['confirm_password'];
    $u_gender = $_POST['u_gender'];
    $u_cellphone = $_POST['user_cellphone'];
    $u_qualification = $_POST['user_qualification'];
    $u_reference = $_POST['user_reference'];
    $user_jobtype = $_POST['job_type'];
    
    if($u_password == $u_ConfirmPassword){
        
        $enc_password = password_hash($u_password, PASSWORD_BCRYPT);
        
        
    //        echo $u_gender;
    //        exit();

       $query = "insert into `jobregistration` (`FullName`, `Email`, `Password`, `Cellphone`, `Qualification`, `refer`, `jobpost`, `Gender`) values ('$u_name', '$u_email', '$enc_password', '$u_cellphone' , '$u_qualification',"
               . " '$u_reference','$user_jobtype', '$u_gender')";
       
       $result = mysqli_query($connection, $query);
       
       if($result){
           
echo '<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js" ></script>';
echo '<script type="text/javascript">';
echo "alert('You successfully applied for a job of $user_jobtype .' );";
echo '</script>';

       }else{
           ?>
  <script> 
       echo '<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js" ></script>';
echo '<script type="text/javascript">';
echo "alert('Not successfully apply for a job!! Data Not Interested!!');";
echo '</script>';
    
    
</script>
<?php
       }
       ?>



  <?php  }
    else{
        ?>
<script> 
    alert('Your Password Do not Match!!');
</script>
    <?php
    }
    
}
?>