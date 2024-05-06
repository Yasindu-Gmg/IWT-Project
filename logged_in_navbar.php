<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAVBAR</title>
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
</head>
<body>

    <!-- Navbar Ekata meke code eka use karanna  -->
    <nav class="navabar">
        <h1 class="logo">LOGO</h1>

        <a href="./booking-page.php"><button type="button" class="BooknowBtn">Book Now</button></a>

        <ul class="navLinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <div class="button-container" style="display: flex;">

            <?php 
                
                echo "<h2>"."<a href = 'user-account.php' style='color:black; font-size:20px; text-decoration:none;'>"."<img src='./images/user.png' style='width:25px;height:25px'>"." ".$_SESSION["username"]."</a>"."</h2>";
                
            ?>
        </div>

    </nav>
</body>
</html>