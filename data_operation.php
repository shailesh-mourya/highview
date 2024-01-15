<?php 
$enroll_id=$_GET["id"];
include('config.php');

if (isset($_GET["id"])) {
    $sql="DELETE FROM `application` WHERE `enroll_no`=$enroll_id;";
    $result=mysqli_query($conn,$sql);
    header("location:enroll_record.php");
    echo "<META HTTP-EQUIV='Refresh' CONTENT='0; URL=http://localhost/highview/enroll_record.php'>;";
   
}


?>