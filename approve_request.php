<?php

include "./connection.php";

$userName = $_POST["userName"];
$hotel=$_POST["hotel"];
$date = $_POST["date"];
$id=$_POST["pending_request_id"];
$hall = $_POST["hall"];
$hotelID = $_POST["hotelID"];

$insertSql= "INSERT INTO reservation (Reservation_ID,Reservation_Date,Start_Date,Hall_No,Hotel_ID) VALUES ('RS112',CURRENT_DATE(), '$date','$hall','$hotelID')";
$deleteSql = "DELETE FROM pending_requests WHERE pending_request_id = '$id'";

if($conn->query($insertSql) && $conn->query($deleteSql)){
    echo "inserted sucessfully";
}

else{
    echo "Something went wrong";
    echo $conn->error;
}

// Redirect back to admin.php
// header("Location: admin.php");
exit();





?>