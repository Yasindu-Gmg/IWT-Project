<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link rel="stylesheet" href="./styles/bookings.css">
</head>
<body>
    <!-- navbar -->
    <?php
        session_start();

        if (!isset($_SESSION["username"])) {
            include "./nav-bar.php"; 
        }
        else{
            include "./logged_in_navbar.php";
        }
    ?>

    <!-- body -->

    <div class="main-container">

    <!-- <div class="search-bar">
        <form action="" method="post">
        <label for="event">Event</label>
        <input type="text" name="event" id="event">
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
        <label for="hotel">Hotel</label>
        <input type="text" name="hotel" id="hotel">
        <input type="submit" value="Search">
    </div> -->


    <div class="search-results">
        <?php
            include "./connection.php";

            $sql  = "SELECT *  FROM hotel";

            $result = $conn->query($sql);
            if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                    echo "<div class='search-result' id='result'>";
                    echo "<div class='result-img'>";
                        echo "<img src='./images/hotel.jpeg'>";
                    echo"</div>";
                    echo "<div class='result-info'>";
                        echo "<div class='result-description'>";
                        echo "<h1>".$row["Name"]."</h1>";
                        echo "<h4>".$row["Street"]."</h4>";
                        echo "<h5>".$row["City"]."</h5>";
                        echo "<p>".$row['Description']."</p>";
                        echo "</div>";
                        echo "<div class='booking-btn'>";
                        
                        echo "<button><a href='reservation.php?hotel_id=".$row["Hotel_ID"]."&name=".$row["Name"]."&city=".$row["City"]."'>Book Now</a></button>";

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                }
            }


        ?>

        
    </div>
</div>

    <!-- footer -->
    <footer class="footer">

    
        <div class="footerContainer">
            
            <div class="description">
                <h1 class="logo">Logo</h1>
                <p class="">Lorem ipsum dolor sit amet, <br> consectetur adipisicing elit. </p>
            </div>
            
            <div class="subscribeMail">
                <input type="email" class="subscribeEmail" name="subscribe-email" id="subscribe-email" class="subscribe-email">
                <input type="button" value="Subscribe" class="subscribeBtn">
            
                <div class="social-logos">
                    <img src="./images/facebook.svg" alt="facebook" srcset="">
                    <img src="./images/instagram.svg" alt="instagram" srcset="">
                    <img src="./images/twitter.svg" alt="twitter" srcset="">
                    <img src="./images/youtube.svg" alt="youtube" srcset="">
                </div>
            </div>
        </div>
    
            
        
            <ul class="footerLinks">
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
            
           <hr> 
       
            <p class="copyright">@2024 Company Name.All rights reserved</p>
    
        </footer>
</body>
</html>