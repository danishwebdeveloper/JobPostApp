
 <?php
 

 include 'db_connection.php';
 
    if (isset($_POST['submit_form'])){
        $get_email = $_POST['email'];
        $get_pass = $_POST['pass'];
        
        
        $query = " select * from jobregistration where Email='".$get_email ."' limit 1";
        
//        var_dump($query);
        
       $res = mysqli_query($connection, $query);
       // var_dump($res);
     
       while ( $rows = mysqli_fetch_assoc($res)) {
          
           $db_email = $rows['Email'];
           $db_pass = $rows['Password'];
           
//           echo "$db_email . $get_email";
//           exit();
           
           $verify_password = password_verify($get_pass, $db_pass);
           
           if($verify_password && $db_email == $get_email){
         
       header("location:display.php");
      
           }
           else{
               echo "not succseffull";
               exit();
           }

}
            
        }
        



    ?>

