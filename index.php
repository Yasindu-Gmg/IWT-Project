<?php include_once 'dbc.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
</head>

<body>
    <?php
        $sql= "SELECT Package_Name FROM Package WHERE Package_ID = 'PK104';"; 
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);
        echo $row['Package_Name'] . "<br>";
    ?>
</body>

</html>

SELECT Hall_No FROM Package WHERE Package_ID = 'PK101';