<?php
    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "Project";

    $connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

    if ($connect->connect_error)
    {
        die("Connection failed: " . $connect->connect_error);
    }
?>

