<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="./styles/admin.css">
</head>


<?php

    session_start();
?>



<body>
    <!-- navbar -->
   


    <div class="admin-info">
        <h1>Admin</h1><br>
        
        <?php
         echo "<h4>". "Username:  ".$_SESSION['username']. "</h4>" ?>
        
        <button class="logoutBtn"><a href="./logout.php" style="text-decoration: none; color:white;">Log Out </a></button>
    </div>

    <div class="accounts">

        <div class="user-accounts">
            <h2>User Accounts</h2>
            <table>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Registered Date</th>
                </tr>
                <?php

                include "./connection.php";

                $sql = "SELECT * FROM registered_user";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo"<tr>";
                        echo"<td>" .$row["First_Name"]." ".$row["Last_Name"]."</td>";
                        echo"<td>" .$row["Email"]."</td>";
                        echo"<td>" .$row["Created_AT"]."</td>";
                        echo"</tr>";

                    }
                } else {
                    echo "<tr><td colspan='3'>No results</td></tr>";
                }
                $conn->close();
                ?>
            </table>
        </div>
        <div class="hotels">
            <h2>Hotels</h2>
            <table>
                <tr>
                    <th>Hotel Name</th>
                    <th>Address</th>
                    <th>Packages</th>
                </tr>
                <?php

                include "./connection.php";

                $sql = "SELECT * FROM  hotel";
                $result = $conn -> query($sql);


                if($result-> num_rows > 0){
                    while($row=$result->fetch_assoc()){
                        echo"<tr>";
                        echo"<td>" .$row["Name"]."</td>";
                        echo"<td>" .$row["Street"]." ".$row["City"]."</td>";
                        $hotelID = $row["Hotel_ID"];
                        echo "<td>";
                        $getPackageSQL = "SELECT P.Package_Name 
                        FROM Hotel H, Package P 
                        WHERE H.Hotel_ID = P.Hotel_ID 
                        AND P.Hotel_ID = '$hotelID'
                        ";
                        $output = $conn->query($getPackageSQL);
                        if($output->num_rows>0){
                            while($package=$output->fetch_assoc()){
                                echo $package['Package_Name']."<br>";
                            }
                        }else{
                            echo "No Package Available";
                        }
                        echo "</td>";

                        echo"</tr>";
                    }
                }else {
                    echo "<tr><td colspan='3'>No results</td></tr>";
                }
                $conn->close();
                ?>

            </table>
        </div>
    </div>
    <div class="reservations">
        <h2>Reservations</h2>
        <table>
            <tr>
                <th>Customer name</th>
                <th>Hotel Name</th>
                <th>Date</th>
                <th>Hall No</th>
            </tr>
            
            <?php

                include "./connection.php";

                $sql = "SELECT pending_request_id,Date,Hall_No,User_Name, Name,H.Hotel_ID FROM pending_requests R,registered_user U,hotel H WHERE U.User_ID = R.User_ID AND H.Hotel_ID = R.Hotel_ID";
                $result = $conn->query($sql);

                if($result->num_rows>0){
                    while($row=$result->fetch_assoc()){
                        echo"<tr>";
                        echo"<td>" .$row["User_Name"]."</td>";
                        echo"<td>" .$row["Name"]."</td>";
                        echo"<td>" .$row["Date"]."</td>";
                        echo"<td>" .$row["Hall_No"]."</td>";
                       
                         
                        
                        echo "<form action='approve_request.php' method='post'>";
                        echo "<input type='hidden' name='userName' value='" .$row["User_Name"] . "'>";
                        echo "<input type='hidden' name='hotel' value='" .$row["Name"] . "'>";
                        echo "<input type='hidden' name='date' value='" . $row["Date"] . "'>";
                        echo "<input type='hidden' name='hall' value='" . $row["Hall_No"] . "'>";
                        echo "<input type='hidden' name='hotelID' value='" . $row["Hotel_ID"] . "'>";
                        echo "<input type='hidden' name='pending_request_id' value='" . $row["pending_request_id"] . "'>";
                        echo "<td><input type='submit' name='approveBtn' class = 'approveBtn' value='Approve'></td>";
                        
                        echo "</form>";
                       
                        echo "<form action='decline_request.php' method='post'>";
                        echo "<input type='hidden' name='userId' value='" . $row["User_Name"] . "'>";
                        echo "<input type='hidden' name='hotel' value='" . $row["Name"] . "'>";
                        echo "<input type='hidden' name='date' value='" . $row["Date"] . "'>";
                        echo "<input type='hidden' name='hall' value='" . $row["Hall_No"] . "'>";
                        echo "<input type='hidden' name='hotelID' value='" . $row["Hotel_ID"] . "'>";
                        echo "<input type='hidden' name='pending_request_id' value='" . $row["pending_request_id"] . "'>";
                        echo "<td><input type='submit' name='declineBtn' class = 'declineBtn' value='Decline'></td>";
                        echo "</form>";
                       



                        echo"</tr>";
                        
                        
                        
                    }
                }
                




            ?>

        </table>
    </div>

    <div class="container">


        <div class="title">
            <h1>Admin Panel</h1>
        </div>
        <div class="adminTasks">

            <div class="change-usernames">
                <h2>Change Username</h2>
                <form action="./change-username.php" method="post">

                    <label for="oldUsername">Old Username</label><br>
                    <input type="text" name="oldUsername" id="oldUsername"><br>
                    <label for="newUsername">New Username</label><br>
                    <input type="text" name="newUsername" id="newUsername"><br>
                    <input type="submit" value="Change Username" class="change">
                </form>

            </div>
            <div class="manageUsersHotels">


                <div class="manageUsers">
                    <h2>Deactivate Users Accounts</h2>
                    <form action="./deativate-user-acc.php" method="post">
                        <input type="text" name="accName" id="username">
                        <input type="submit" value="Deactivate" class="deactivateBtn">
                    </form>
                    
                   
                </div>
                <div class="manageHotels">
                    <h2>Deactivate Hotel Representative Accounts</h2>
                    <form action="./delete-hotel_rep.php" method="post">
                        <input type="text" name="repName" id="repName">
                        <input type="submit" value="Deactivate" class="deactivateBtn">
                    </form>
                    
                    
                </div>
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



<script src="./script.js"></script>
</body>

</html>