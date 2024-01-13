<?php 
include('config.php');

$firstName=$_POST["firstName"];
$lastName=$_POST["lastName"];
$gender=$_POST["inlineRadioOptions"];
$dob=$_POST["birthdayDate"];
$classYear=$_POST["classYear"];
$class=$_POST["class"];
$address=$_POST["address"];
$email=$_POST["email"];
$fatherName=$_POST["fatherName"];
$motherName=$_POST["motherName"];
$mobileno=$_POST["mobileno"];
$mobileno2=$_POST["mobileno2"];
$file = $_FILES['file']['name'];


$target_dir = "applicant/";
$target_name = $target_dir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'],$target_name);


$sql="INSERT INTO `application`(`first_name`,`last_name`,`gender`,`dob`, `academic_year`, `standard`, `address`,`email`, `father_name`, `mother_name`, `mobile_no1`, `mobile_no2`, `image`) VALUES ('$firstName','$lastName','$gender','$dob','$classYear','$class','$address','$email','$fatherName','$motherName','$mobileno','$mobileno2','$file');";


if (mysqli_query($conn,$sql)) {

    echo "application submitted";

  
} else {
   echo "Something went wrong". mysqli_error($conn);
}
mysqli_close($conn);




?>