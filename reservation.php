
<?php include_once 'connection.php'; 


if(isset($_GET['hotel_id']) && isset($_GET['name']) && isset($_GET['city'])) {
    $hotel_id = $_GET['hotel_id'];
    $name = $_GET['name'];
    $city = $_GET['city'];
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Page</title>
    <link rel="stylesheet" href="reservstion.css">
</head>

<body>
    <div class="container1">
        <div class="box" id="box1">

            <div class="hotelName">
                <h2>Hotel Name: <?php echo "$name"?></h2> 
                <p>location:<?php echo "$city"?></p>
            </div>
            <img src="photo.jpg"><br>

            <br>
            
        </div>

        <div class="box" id="box2">
            <div class="container2">
                <div class="abox" id="abox1">
                    <div class="sabox" id="sabox1">
                        <p><b><u>Indoor Packages</u></b></p>
                    </div>
                    <div class="sabox" id="sabox2">
                        <div class="bbox" id="bbox1">
                            <h3>
                                <?php
                                    $sql= "SELECT Package_Name FROM Package WHERE Package_ID = 'PK101';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Package_Name'] . "<br>";
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK101';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Details'] . "<br>";
                                ?>
                            </p>
                            <p style="font-size: 28px;">
                                Rs.
                                <?php
                                    $sql= "SELECT Price FROM Package WHERE Package_ID = 'PK101';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Price'] . ".00";
                                ?>
                            </p>
                            
                            <form action="" method="post">
                                <input type="date" name="date" id="date" style="margin-left:70px !important;">
                                <a href='checkout.php?hotel_id=<?php echo $hotel_id; ?>&package_id=PK101'><button type="button" class="btn" style="margin-top: 3px;">Check Out</button></a>
                            </form>
                        </div>

                        <div class="bbox" id="bbox2">
                            <h3>
                                <?php
                                    $sql= "SELECT Package_Name FROM  Package WHERE Package_ID = 'PK102';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Package_Name'] . "<br>";
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK102';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Details'] . "<br>";
                                ?>
                            </p>
                            <p style="font-size: 28px;">
                                Rs.
                                <?php
                                    $sql= "SELECT Price FROM Package WHERE Package_ID = 'PK102';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Price'] . ".00";
                                ?>
                            </p>
                            <form action="" method="post">
                                <input type="date" name="date" id="date" style="margin-left:70px !important;">
                                <a href='checkout.php?hotel_id=<?php echo $hotel_id; ?>&package_id=PK102'><button type="button" class="btn" style="margin-top: 3px;">Check Out</button></a>
                            </form>
                        </div>
                        <div class="bbox" id="bbox3">
                            <h3>
                                <?php
                                    $sql= "SELECT Package_Name FROM Package WHERE Package_ID = 'PK103';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Package_Name'] . "<br>";
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK103';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Details'] . "<br>";
                                ?>
                            </p>
                            <p style="font-size: 28px;">
                                Rs.
                                <?php
                                    $sql= "SELECT Price FROM Package WHERE Package_ID = 'PK103';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Price'] . ".00";
                                ?>
                            </p>
                             <form action="" method="post">
                                <input type="date" name="date" id="date" style="margin-left:70px !important;">
                                <a href='checkout.php?hotel_id=<?php echo $hotel_id; ?>&package_id=PK103'><button type="button" class="btn" style="margin-top: 3px;">Check Out</button></a>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="abox" id="abox2">
                    <div class="sabox" id="sabox1">
                        <p><b><u>Outdoor Packages</u></b></p>
                    </div>
                    <div class="sabox" id="sabox2">
                        <div class="cbox" id="cbox1">
                            <h3>
                                <?php
                                    $sql= "SELECT Package_Name FROM Package WHERE Package_ID = 'PK104';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Package_Name'] . "<br>";
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK104';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Details'] . "<br>";
                                ?>
                            </p>
                            <p style="font-size: 28px;">
                                Rs.
                                <?php
                                    $sql= "SELECT Price FROM Package WHERE Package_ID = 'PK104';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Price'] . ".00";
                                ?>
                            </p>
                            <form action="" method="post">
                                <input type="date" name="date" id="date" style="margin-left:70px !important;">
                                <a href='checkout.php?hotel_id=<?php echo $hotel_id; ?>&package_id=PK104'><button type="button" class="btn" style="margin-top: 3px;">Check Out</button></a>
                            </form>

                        </div>
                        <div class="cbox" id="cbox2">
                            <h3>
                                <?php
                                    $sql= "SELECT Package_Name FROM Package WHERE Package_ID = 'PK105';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Package_Name'] . "<br>";
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK105';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Details'] . "<br>";
                                ?>
                            </p>
                            <p style="font-size: 28px;">
                                Rs.
                                <?php
                                    $sql= "SELECT Price FROM Package WHERE Package_ID = 'PK105';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Price'] . ".00";
                                ?>
                            </p>
                            <form action="" method="post">
                                <input type="date" name="date" id="date" style="margin-left:70px !important;">
                                <a href='checkout.php?hotel_id=<?php echo $hotel_id; ?>&package_id=PK105'><button type="button" class="btn" style="margin-top: 3px;">Check Out</button></a>
                            </form>

                        </div>
                        <div class="cbox" id="cbox3">
                            <h3>
                                <?php
                                    $sql= "SELECT Package_Name FROM Package WHERE Package_ID = 'PK106';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Package_Name'] . "<br>";
                                ?>
                            </h3>
                            <p>
                                <?php
                                    $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK106';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Details'] . "<br>";
                                ?>
                            </p>
                        
                            <p style="font-size: 28px;">
                                Rs.
                                <?php
                                    $sql= "SELECT Price FROM Package WHERE Package_ID = 'PK106';"; 
                                    $result = mysqli_query($conn, $sql);
                                    $row = mysqli_fetch_assoc($result);
                                    echo $row['Price'] . ".00";
                                ?>
                            </p>
                            
                            <form action="" method="post">
                                <input type="date" name="date" id="date" style="margin-left:70px !important;">
                                <a href='checkout.php?hotel_id=<?php echo $hotel_id; ?>&package_id=PK106'><button type="button" class="btn" style="margin-top: 3px;">Check Out</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>