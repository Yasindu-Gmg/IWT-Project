<?php


include "./connection.php";

$accName = $_POST['accName'];

$checkSql ="SELECT User_ID from registered_user WHERE User_Name = '$accName'";

$result =$conn->query($checkSql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userID = $row['User_ID'];
    deactivateAcc($userID,$conn);
} else {
    echo "<script>alert('Username not Found');</script>";
    echo "<script>window.location.href = 'admin.php';</script>";
    exit();
}



function deactivateAcc($userid,$conn){
    $deleteSQL =  "DELETE FROM registered_user WHERE User_ID ='$userid'";

    if($conn->query($deleteSQL)){
        echo "<script>alert('Record Deleted');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
        exit();
    }
    else{
        echo "<script>alert('Username not Found');</script>";
        echo "<script>window.location.href = 'admin.php';</script>";
        exit();
    }
}



?>