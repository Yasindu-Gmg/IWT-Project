<?php

include_once 'dbc.php';

if(isset($_POST['search'])) {
    $date = $_POST['date'];
    $hotelID = 'H1001'; // Assuming this is your hotel ID

    // Prepare the SQL query
    $sql = "SELECT Date FROM Make_Reservation WHERE Hotel_ID = '$hotelID' AND Date = '$date';";
    $result = mysqli_query($connect, $sql);

    // Check if any rows are returned
    if(mysqli_num_rows($result) > 0) {
        echo "Not Available";
    } else {
        echo "Available";
    }
}

?>

