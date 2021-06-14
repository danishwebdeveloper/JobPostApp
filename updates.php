
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="styles.css" rel="stylesheet" type="text/css"/>

<!------ Include the above in your HEAD tag ---------->

<?php
include 'db_connection.php';
 $get_id = $_GET['id'];
 
 $query = "select * from jobregistration where id={$get_id}";

 
 $showdata = mysqli_query($connection, $query);
 $showallresult = mysqli_fetch_array($showdata);

?>

<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Please fill the form carefully, May it change your life! Viel Glück</p>
                        <input type="submit" name="" value="Login"/><br/>
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
                                <h3 class="register-heading">Update Record!</h3>
                             
                                
                                <form action="#" method="POST" >
                                    
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="user_name" placeholder="Full Name *" value="<?php echo $showallresult['FullName']; ?>" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="user_email" placeholder="Email *" value="<?php echo $showallresult['Email']; ?>" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="user_password" placeholder="Password *" value="<?php echo $showallresult['Password']; ?>" required="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="confirm_password"  placeholder="Confirm Password *" value="" required="" />
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="u_gender" value="<?php echo $showallresult['Gender'] ?>" required="" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="u_gender" value="<?php echo $showallresult['Gender'] ?>" required="">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        
                                        <div class="form-group">
                                            <input type="text" required="" minlength="10" maxlength="10" name="user_cellphone" class="form-control" placeholder="Your Phone *" value="<?php echo $showallresult['Cellphone']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="user_qualification" placeholder="Enter Qualification *" value="<?php echo $showallresult['Qualification']; ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required="" class="form-control" name="user_reference" placeholder="Enter Reference *" value="<?php echo $showallresult['refer']; ?>" />
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
                                        <input type="submit" class="btnRegister" name="submit_form" value="Update"/>
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
if(isset ($_POST ['submit_form'])){
    
    
    $update_id = $_GET['id'];
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
 
     
       $up_query = "update jobregistration SET id= '$get_id', FullName='$u_name', Email='$u_email', Cellphone='$u_cellphone', Qualification='$u_qualification', refer='$u_reference', jobpost='$user_jobtype', Gender='$u_gender' WHERE id=$update_id";
      
       
       $run_update_query = mysqli_query($connection, $up_query);
       
//       if($run_update_query){
//           echo "OK BHAII";
//       }
//       else{
//           echo "NOT OKAYY";
//       }
//     echo $update_query;
//     exit();
       
 if($run_update_query){
           
echo '<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js" ></script>';
echo '<script type="text/javascript">';
echo "alert('You successfully Update for a job of $user_jobtype .' );";
echo '</script>';

       }else{
           ?>
  <script> 
       echo '<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js" >\n\
     </script>';
echo '<script type="text/javascript">';
echo "alert('Not successfully Update for a job!! Data Not Interested!!');";
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