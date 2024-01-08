<?php 
include('config.php');
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$birthdayDate=$_POST["birthdayDate"];
$gender=$_POST["inlineRadioOptions"];
$email=$_POST["emailAddress"];
$phoneNumber=$_POST["phoneNumber"];
$password=$_POST["password"];
$city=$_POST["city"];

$sql="INSERT INTO `user`(`phone`,`first_name`, `last_name`, `dob`, `gender`, `email`, `password`, `city`) VALUES ('$phoneNumber','$firstName','$lastName','$birthdayDate','$gender','$email','$password','$city');";


if ($result=mysqli_query($conn,$sql)) {
    header("Location:index.html ");
    exit();
}
else {
   echo "try again";
}


// echo "city: ".$city;
// echo "<br>gender :".$gender;


?>