<?php

include "./connection.php";

$userName = $_POST["userName"];
$hotel=$_POST["hotel"];
$date = $_POST["date"];
$id=$_POST["pending_request_id"];

$deleteSql = "DELETE FROM pending_requests WHERE pending_request_id = $id";


if($conn->query($deleteSql)){
    echo "inserted sucessfully";
}

else{
    echo "Something went wrong";
}

// Redirect back to admin.php
header("Location: admin.php");
exit();





?>