<?php 
include('config.php');
$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$classYear=$_POST["classYear"];
$class=$_POST["class"];
$address=$_POST["address"];
$fatherName=$_POST["fatherName"];
$motherName=$_POST["motherName"];
$mobileno=$_POST["mobileno"];
$mobileno2=$_POST["mobileno2"];


$sql="INSERT INTO `application`(`first_name`,`last_name`, `academic_year`, `standard`, `address`, `father_name`, `mother_name`, `mobile_no1`, `mobile_no2`) VALUES ('$firstName','$lastName','$classYear','$class','$address','$fatherName','$motherName','$mobileno','$mobileno2');";

$result=mysqli_query($conn,$sql);




?>