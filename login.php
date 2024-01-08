<?php 
session_start();
include('config.php');
//$email=$_POST["emailAddress"];
$phoneNumber=$_POST["mob"];
$password=$_POST["passwordl"];


$sql="SELECT * FROM `user` WHERE `phone`='$phoneNumber' AND `password`='$password';";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    $rows=mysqli_fetch_assoc($result);
    $_SESSION["user"]="{$rows['first_name']}";
    header('location:index.php');
    
}
else {
    echo "invalid login and password";
}



?>