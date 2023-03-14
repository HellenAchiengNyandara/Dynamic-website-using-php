<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="spotlight.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotlight</title>
</head>
<body>
    <div class="main">

        <img id="spotlight-background" class="bg" src="images/spotlight back.jpg" alt="background">
        <div class="welcome">
            <div class="navbar">
                <span id = "home"><a href="home.html">HOME</a></span>
                <span id = "menu"><a href="menu page.html">MENU</a></li>
                <span id = "spotlight"><a href="spotlight.php">SPOTLIGHT</a></li>
                <span id = "logo">Ambience</span>
                <span id = "login"><a href="login.php">LOGIN</a></span>
                <span id = "register"><a href="registration.php">REGISTER</a></span>
                <span id = "admin"><a href="admin.php">ADMIN</a></span>
                <p id = "bakery"> BAKERY </p>
            </div>
        </div>

        <div class="spot-product">
            <div id ="product-of-month">
                <h1>Product Of The Month</h1>
                
                    <?php
                        include('dbconfig.php');

                        $sql = "CALL spotlightProduct()";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h2>".$row["name"]."</h2>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
    
                <?php 
                include('dbconfig.php');
                $sql = "SELECT image FROM product WHERE productID = (SELECT MAX(productID) FROM maxsales_view)";   
                $result = $conn -> query($sql);
                
                if($result-> num_rows > 0) {  
                    $row = $result-> fetch_assoc();
                    ?><img img class ="zinger-pic" src="<?php echo $row['image']; ?>"  width='350' height='200'  /><?php

                }  
                else {  
                    echo "Record Not Found";
                }
                ?> 
                <p>
                    Every day we spotlight a product having most sales in our bakery. 
                    We hope you enjoy learning a little about them. 
                    Stop by any of our locations to sample these treats and take something home to share.
                </p>
            </div>
        </div>
    </div>
</body>
</html>