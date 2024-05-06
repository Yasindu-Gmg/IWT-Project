<?php

include "./connection.php";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["Name"]." ".$row["Email"]." ".$row["Created_Date"] . "<br>" ;
  }
} else {
  echo "0 results";
}


$conn->close();


?>
