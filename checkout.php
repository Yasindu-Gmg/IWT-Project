<!DOCTYPE html>
    <html lang="en">
    <?php
    if(isset($_GET['hotel_id']) && isset($_GET['package_id'])) {
        $hotel_id = $_GET['hotel_id'];
        $package_id = $_GET['package_id'];
    }
    
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Check Out Page</title>
        <link rel="stylesheet" href="checkout.css">
        <script src="https://kit.fontawesome.com/f140081b0d.js" crossorigin="anonymous"></script>
        <style>
            nav{
                margin: 20px;
                display: flex;
                justify-content: space-around;
            }
    
            .navLinks{
                margin-top: 10px;
                display: flex;
                font-size: large;
                list-style-type: none;
              
            }
            .logo{
                padding: 0;
                margin: 0;
            }
            .navLinks a{
                text-decoration: none;
                color: black;
                margin-right:15px ;
            }
            .BooknowBtn,.LoginBtn ,.SingupBtn{
                padding:8px 20px;
                border-radius: 10px;
                cursor: pointer;
                background-color: #3C5B6F;
                border: none;
                color: white;
            }
            
        </style>
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            .footer{
                background-color: #153448;
                color: white;
                padding: 1px;
            }
            .footerContainer{
                display: flex;
                justify-content: space-between;
                margin: 30px;
               
            }
            .logo{
                    padding: 0;
                    margin: 0;
                }
            .social-logos{
                margin-top: 25px;
                text-align: center;
            }
          
            .social-logos img {
                margin-right: 20px;
            }
            .subscribeEmail{
                outline: none;
                padding: 10px;
                border-radius: 10px;
            }
          
            .subscribeBtn{
                padding:8px 20px;
                    border-radius: 10px;
                    cursor: pointer;
                    background-color: white;
            }
          
            .footerLinks{
                
                display: flex;
                list-style-type: none;
                justify-content: space-evenly;
            }
          
           
            .footerLinks a {
                text-decoration: none;
                color: white;
            }
          
          
            .copyright{
                text-align: center;
                color: #8f8f8f;
            }
          
                
          </style>
    </head>

    <body>

        <header>
        <!-- Navbar Ekata meke code eka use karanna  -->
            <nav class="navabar">
                <h1 class="logo">LOGO</h1>

                <a href="#"><button type="button" class="BooknowBtn">Book Now</button></a>

                <ul class="navLinks">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
                <div class="button-container">

                    <a href="#" ><button type="button" class="LoginBtn">Login</button></a>
                    <a href="#" ><button type="button" class="SingupBtn">Sign Up</button></a>
                    
                </div>

            </nav>
        </header>

        <main>
            <div class="container1">
                <div class="box" id="box1">
                    <div class="container6">
                        <div class="abox" id="abox1" style="box-shadow: 0 7px 25px gray; height: 200px;">
                            <h3>Booking Details</h3>
                            <hr>
    
                            <table border="1">
                                <tr>
                                    <th>Hotel</th>
                                    <th>Hall No</th>
                                    <th>Package Name</th>
                                    <th>Number of Guests</th>
                                    <th>Contact Support</th>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                            include_once 'connection.php';
                                            $sql= "SELECT Name FROM Hotel WHERE Hotel_ID = '$hotel_id';"; 
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            echo $row['Name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                             include_once 'connection.php';
                                            $sql= "SELECT Hall_No FROM Package WHERE Package_ID = '$package_id';"; 
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            echo $row['Hall_No'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                             include_once 'connection.php';
                                            $sql= "SELECT Package_Name FROM Package WHERE Package_ID = '$package_id';"; 
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            echo $row['Package_Name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                             include_once 'connection.php';
                                            $sql= "SELECT Total_Guests FROM Package WHERE Package_ID = '$package_id';"; 
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            echo $row['Total_Guests'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php
                                             include_once 'connection.php';
                                            $sql= "SELECT Email FROM Manager WHERE Hotel_ID = '$hotel_id';"; 
                                            $result = mysqli_query($conn, $sql);
                                            $row = mysqli_fetch_assoc($result);
                                            echo $row['Email'];
                                        ?>
                                    </td>
                                </tr>
                            </table>
                            
                        </div>
                        <div class="abox" id="abox2" style="box-shadow: 0 7px 25px gray;">
                            <h3>Recommended for You</h3>
                            <hr>
                            <div class="recommend">
                                <div class="pkg" id="pkg1">
                                <img src="2e7cc6af10b72351afabdf162dbb9cbb.jpg" alt="package1">
                                <p>
                                    <?php
                                        $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK102';"; 
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['Details'];
                                    ?>
                                </p>
                                </div>
                                <div class="pkg" id="pkg2">
                                <img src="4c9408c40a36fa850fb2f8a4d4aaa70a.jpg" alt="package2">
                                <p>
                                    <?php
                                        $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK103';"; 
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['Details'];
                                    ?>
                                </p>
                                </div>
                                <div class="pkg" id="pkg3">
                                <img src="login.jpg" alt="package3">
                                <p>
                                    <?php
                                        $sql= "SELECT Details FROM Package WHERE Package_ID = 'PK104';"; 
                                        $result = mysqli_query($conn, $sql);
                                        $row = mysqli_fetch_assoc($result);
                                        echo $row['Details'];
                                    ?>
                                </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="box" id="box2">
                    <div class="container2">
                        <div class="subbox" id="subbox1" style="box-shadow: 0 7px 25px gray; margin-top: -150px ; margin-left: -20px; height: 340px;">
                            <h3>Price Details & Summary</h3>
                            <hr>
                            <div class="container3">
                                <div class="sbox" id="sbox1">
                                    <div class="ssbox" id="ssbox1">
                                        <h4>Event Date:</h4>
                                        <form action="./checkout.php" method="post">
                                            <input type="date" name="date" style="margin-top: -60px">
                                            <input type="submit" value="Reserve">
                                        </form>
                                    </div>
                                </div>
                                <div class="sbox" id="sbox2" style="height: 160px;">
                                    <a href="http://localhost/IWT/reservation.php"><button type="button" id="btn4" style="display: none;">Change</button></a>
                                    <div class="container4">
                                        <div class="sssbox" id="sssbox1">
                                            <p>
                                                <?php
                                                    $sql= "SELECT Details FROM Package WHERE Package_ID = '$package_id';"; 
                                                    $result = mysqli_query($conn, $sql);
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row['Details'];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="container5">
                                        <div class="sssbox" id="sssbox3">
                                            <h2>Grand Total</h2>
                                        </div>
                                        <div class="sssbox" id="sssbox4">
                                            <h2>Rs.
                                            <?php
                                                $sql= "SELECT Price FROM Package WHERE Package_ID = '$package_id';"; 
                                                $result = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_assoc($result);
                                                echo $row['Price'] . ".00";
                                            ?>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="subbox" id="subbox2" style="margin-left: 100px; margin-top: -20px;">
                            <div class="payMeth">
                                <h3>How would you like to pay?</h3>
                                
                                <div class="payOpt">
                                    <form action="card.php" method="post">
                                    <a href="http://localhost/IWT/card.php"><button type="submit" id="btn1" name="btn1" value="Card Payment" style="width: 190px;"> <i class="fa-solid fa-credit-card fa-xl"></i>    Card Payment </button></a>
                                    </form>
                                    <a href="http://localhost/IWT/paypal.php"><button type="button" id="btn2" style="width: 190px;"> <i class="fa-brands fa-paypal fa-xl"></i>     Paypal </button></a>
                                    <a href="http://localhost/IWT/transfer.php"><button type="button" id="btn3" style="width: 190px;"> <i class="fa-solid fa-money-bill-transfer fa-xl"></i>     Online Transfer</button></a>
                                </div>
                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main> <br>

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