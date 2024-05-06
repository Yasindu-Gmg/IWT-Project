<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="card.css">
</head>
<body>
    <div class="box">
        <img src="visa.png" alt="visa">
        <hr>
        <form class="payment" action="cpayment.php" method="post">
            <label>Card Number</label>
            <input type="text" id="txt1" name="txt1" placeholder="1234-5678-9000-0000">
            <div class="cd1">
                <div class="cd2">
                    <label>Expiry Date</label>
                    <input type="text" id="txt2" name="txt2" placeholder="MM / YY">
                </div>
                <div class="cd3">
                    <label>CVC</label>
                    <input type="text" id="txt3" name="txt3" placeholder="243">
                </div>
            </div>
            <label id="lbl">Card Owner</label>
            <input type="text" id="txt4" name="txt4" placeholder="Card Owner Name">
            <input type="submit" id="sbm" name="sbm" value="CHECK OUT">
        </form>
    </div>
    <h2>
    <?php
    include ('dbc.php');
    if(isset($_POST['sbm']))
    {
        $value1 = $_POST['txt1'];
        echo $value1;
        $value2 = $_POST['txt2'];
        echo $value2;
        $value3 = $_POST['txt3'];
        echo $value3;
        $value4 = $_POST['txt4'];
        echo $value4;
			    
        $sql = "INSERT INTO Card_Payment (Card_Number, Expiary_Date, CVC, Name, User_ID) VALUES ('$value1', '$value2', '$value3', '$value4', 'U1001');";

        if($connect->query($sql)){
            echo "Inserted Successfully";
        }
        else{
            echo "Error: ".$connect->error;
        }
            
    }
    ?>
    </h2>
</body>
</html>
