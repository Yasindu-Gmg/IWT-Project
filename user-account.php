<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./styles/user-account.css">
</head>



<body>
    <!-- navbar -->
    <?php 
    session_start();
    include "./logged_in_navbar.php"; ?>

    <div class="main-container">
        <div class="left-container">
            <h2>User Details</h2>
            <h3>Name</h3>
            <?php
            
            include "./connection.php";
            $username = $_SESSION["username"];
            $sql = "SELECT * FROM registered_user WHERE User_Name = '$username'";

            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                echo "<p>" . $row["First_Name"] . " " . $row["Last_Name"] . "</p>";
            }


            ?>

            <h3>Email: </h3>
            <?php
            echo "<p>" . $row["Email"] . "</p>";

            ?>
            <h3>Address: </h3>
            <?php
            echo "<p>" . $row["Address"] . "</p>";

            ?>
            <button class="logoutBtn"><a href="./logout.php" style="text-decoration: none; color:white;">Log Out </a></button>
 
        </div>
        <div class="right-container">
            <div class="top-container">
                <h2>Reservations</h2>
                <table>
                    <tr>
                        <th>Venue</th>
                        <th>Date</th>
                        <th>Delete</th>

                    </tr>
                    <?php
                   
                    include "./connection.php";

                    $username = $_SESSION["username"];

                    $sql = "SELECT User_ID FROM registered_user WHERE User_Name = '$username'";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $userID = $row["User_ID"];

                        $checkSQL = "SELECT Start_Date ,R.Reservation_ID, H.Name FROM reservation R, hotel H, make_reservation M WHERE  R.reservation_ID = M.Reservation_ID AND H.Hotel_ID = M.hotel_ID AND M.User_ID = '$userID'";

                        $result = $conn->query($checkSQL);
                        if($result->num_rows>0){
                            
                            while($row = $result->fetch_assoc()){
                                echo "<tr>";
                                echo "<td>".$row["Name"]."</td>";
                                echo "<td>".$row["Start_Date"]."</td>";
                                echo "<td>"."<button id='delete'><a href='delete-reservation.php?reservation_id=".$row["Reservation_ID"]."'>Delete</a></button>"."</td>";
                                echo "</tr>";

                            }
                        }
                        else{
                            echo "<tr>";
                            echo "<td  colspan='2'>"."No Resevations"."</td>";
                                
                            echo "</tr>";

                        }
                    }


                    ?>


                </table>
            </div>
            <div class="bottom-container">
                <h2>Change Password</h2>
                <form method="post" action="./change-password.php" id="validatePassword">
                    <label for="Current Password">Current Password</label><br>
                    <input type="text" name="current-password" id="current-password" class="changePasswordForm">
                    <br>
                    <label for="New Password">New Password</label><br>
                    <input type="text" name="new-password" id="new-password" class="changePasswordForm">
                    <br>
                    <label for="Confirm Password">Confirm Password</label><br>
                    <input type="text" name="confirm-password" id="confirm-password" class="changePasswordForm">
                    <br>
                    <input type="submit" value="Change Password" class="changePasswordBtn" id="confirm">
                </form>

            </div>
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


    <!-- <script>
        document.getElementById("validatePassword").addEventListener('submit', function (event) {
            event.preventDefault();

            var password = document.getElementById('new-password').value;
            var confirmPassword = document.getElementById('confirm-password').value;
            if (password != confirmPassword) {
                alert("Password Matched");
                //window.location.href = 'user-account.html'
            } 
        });

    </script> -->
</body>

</html>