<?php


$username = "root";
$password = "";
$server = "localhost";
$database = "php_jobportal";

$con = mysqli_connect($server, $username, $password,  $database,);

if($con){
    echo "Connection successful";
}
else {
    echo "Not Successfull";
}

?>

