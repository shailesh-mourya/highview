<?php 
session_start();
include('config.php');
//$email=$_POST["emailAddress"];
$phoneNumber=$_POST["adminphone"];
$password=$_POST["adminpass"];


$sql="SELECT * FROM `admino` WHERE `mobile`='$phoneNumber' AND `password`='$password';";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result)>0) {
    $rows=mysqli_fetch_assoc($result);
    $_SESSION["admin_name"]="{$rows['name']}";
    $_SESSION["user"]="{$rows['name']}";
    $_SESSION["admino_mobile"]="{$rows['mobile']}";
    header('location:dashboard.php');
    
}
else {
    echo "invalid login and password";
}



?>