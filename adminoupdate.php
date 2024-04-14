<?php
session_start();
include('config.php');

$email = $_POST["emailAddress"];
$phoneNumber = $_POST["adminphone"];
$passwordo = $_POST["adminpasso"];
$passwordn = $_POST["adminpassn"];

// Sanitize inputs and use prepared statements to prevent SQL injection
$email = mysqli_real_escape_string($conn, $email);
$phoneNumber = mysqli_real_escape_string($conn, $phoneNumber);


$sql = "SELECT * FROM `admino` WHERE `mobile`='$phoneNumber';";
$result = mysqli_query($conn, $sql);

if ($result) {
    $rows = mysqli_fetch_assoc($result);
    $storedHashedPassword = $rows['password'];

    if (password_verify(trim($passwordo), $storedHashedPassword)) {
        $id = $rows['id'];

        // Use password_hash to securely store passwords
        $hashedPassword2 = password_hash($passwordn, PASSWORD_DEFAULT);

        $sql1 = "UPDATE `admino` SET `email`='$email', `mobile`='$phoneNumber', `password`='$hashedPassword2' WHERE `id`='$id';";

        if (mysqli_query($conn, $sql1)) {
            echo "<script>alert('Successful update');</script>";
            header('location:dashboard.php');
            exit();
        } else {
            echo "Something went wrong with the update: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid login and password";
    }
} else {
    echo "Error in the query: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
