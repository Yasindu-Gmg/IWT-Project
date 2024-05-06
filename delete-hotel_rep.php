<?php


include "./connection.php";

$repName = $_POST['repName'];
$checkSql ="SELECT Rep_ID from hotel_representative	 WHERE Name = '$repName'";

$result =$conn->query($checkSql);



if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $repID = $row['Rep_ID'];
    echo $repID;
    deactivateAcc($repID,$conn);
} else {
    echo "<script>alert('Username not Found');</script>";
    // echo "<script>window.location.href = 'admin.php';</script>";
    exit();
}


function deactivateAcc($repID,$conn){
    $deleteSQL =  "DELETE FROM hotel_representative WHERE Rep_ID='$repID'";

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