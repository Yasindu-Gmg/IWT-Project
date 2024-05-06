<?php

include "./connection.php";


$oldUsername = $_POST["oldUsername"];
$newUsername = $_POST["newUsername"];

$sql = "SELECT User_ID FROM registered_user WHERE User_Name='$oldUsername'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userID = $row['User_ID'];
    echo "User ID: " . $userID;
} else {
    echo "<script>alert('Username not Found');</script>";
    echo "Error". $conn->error;
    echo "<script>window.location.href = 'admin.php';</script>";
    exit();
}

$updateSql = "UPDATE registered_user  SET User_Name= '$newUsername' WHERE User_ID='$userID'";
if($conn->query($updateSql)){
    
    echo "<script>alert('Username updated successfully');</script>";
    echo "<script>window.location.href = 'admin.php';</script>";
    exit();
}
else{
    echo "Error". $conn->error;
}
$conn->close();
?>
