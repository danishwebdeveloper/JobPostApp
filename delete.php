<?php

include 'db_connection.php';

$get_id = $_GET['id'];

$del_query = "DELETE FROM `jobregistration` WHERE id=$get_id";
$run_del_query = mysqli_query($connection, $del_query);

if($run_del_query){
    
//echo "alert('ok')";
//exit();
    header('location:display.php');
}else{
echo "Not Deleted";
}




