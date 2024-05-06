<?php
session_start();
include "./connection.php";


$username = $_SESSION["username"];

$currentPassword = $_POST['current-password'];



$newPassword = $_POST['confirm-password'];


$getUsernameSQL = "SELECT Password FROM registered_user WHERE User_Name = '$username'";

$result = $conn -> query($getUsernameSQL);

if (!$result) {
    echo "Error: " . $conn->error;
}
if($result->num_rows>0){
    $row = $result->fetch_assoc();
    if($currentPassword === $row["Password"]){
        $updateSQL = "UPDATE  registered_user SET Password ='$newPassword' WHERE User_Name = '$username';";

        if($conn->query($updateSQL)){
            echo "<script>alert('Update the password');</script>";
            echo "<script>window.location.href = 'user-account.php';</script>";
            exit();
            
        }
        else{
            echo "<script>alert('Password Does Not Upadated');</script>";
            echo "<script>window.location.href = 'user-account.php';</script>";
            exit();
        }
    }else{
        echo "<script>alert('Password Does Not Match');</script>";
        echo "<script>window.location.href = 'user-account.html';</script>";
        exit();
    }
}else{
    echo "username Not found";
}

























?>