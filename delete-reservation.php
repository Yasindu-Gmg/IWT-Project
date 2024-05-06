<?php include_once 'connection.php'; 

    if(isset($_GET['reservation_id'])) {
        $reservation_id = $_GET['reservation_id'];

       
    }

    echo $reservation_id;

    $sql = "DELETE FROM reservation WHERE Reservation_ID = '$reservation_id';";
    if($conn->query($sql)){
        echo "<script>window.log('Reservation Canceled');</script>";
        echo "<script>window.location.href = 'http://localhost/IWT-Project/user-account.php';</script>";
    }
    else{
        echo $conn->error;
    }

?>