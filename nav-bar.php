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
   
    <nav class="navabar">
        <h1 class="logo">LOGO</h1>

        <button type="button" class="BooknowBtn"><a href="./booking-page.php">Book Now</a></button>

        <ul class="navLinks">
            <li><a href="#">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">About</a></li>
        </ul>
        <div class="button-container">

            <button type="button" class="LoginBtn"><a href="./login.html" >Login</a></button>
            <a href="#" ><button type="button" class="SingupBtn">Sign Up</button></a>
            
        </div>

    </nav>
</body>
</html>