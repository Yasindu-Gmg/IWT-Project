<?php
session_start();
include './connection.php';

$username = $_POST["username"];

$password = $_POST["password"];



$sql = "SELECT * FROM Registered_User WHERE User_Name = '$username';";
$result =$conn->query($sql);

$sql_admin = "SELECT * FROM admin WHERE Username = '$username';";
$result_admin = $conn->query($sql_admin);



$_SESSION["username"] = $username;
if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();
    if($password === $row["Password"]){
        $_SESSION["username"] = $username;
        header("Location: user-account.php");
    }

    else{
        echo "<script>alert('Invalid Password')</script>";
        echo "<script>window.location.href = 'http://localhost/IWT-Project/login.html';</script>";
    }

} 

elseif ($result_admin->num_rows > 0) {
    $row = $result_admin->fetch_assoc();
    if ($password === $row["Password"]) {
        $_SESSION["username"] = $username;
        echo "Admin Login Successful";
        header("Location: admin.php");
        exit(); 
    } else {
        echo "Password Mismatched";
    }
} else {
    echo "Wrong Username";
}







?>