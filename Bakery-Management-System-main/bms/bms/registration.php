<?php
if(isset($_POST["submit"])){
    include 'dbconfig.php';

    $sql1 = "INSERT INTO address (street, area, city, zipCode)
    VALUES ('".$_POST["street"]."','".$_POST["area"]."','".$_POST["city"]."','".$_POST["zipcode"]."')";

    $sql2 = "INSERT INTO customer (name, email, password, contactNum)
    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["cell-no"]."')";


    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE) {
        echo "
            <script type= 'text/javascript'>
                alert('New record created successfully');
            </script>";
    } 
    else 
    {
        echo 
        "<script type= 'text/javascript'>
            alert('Error: " . $sql1 . "<br>" . $conn->error."');
            alert('Error: " . $sql2 . "<br>" . $conn->error."');
        </script>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

    <div class="main">

        <img id= "registration-background" src="images/login background.jpg" alt="registration background">
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


        <div class="registration">

            <h2 id = "heading">Registration</h2>
            <form action="registration.php" method="post">

                <div class="input-section">
                    <label for="first-name">NAME</label>
                    <input type="text" id="name" name="name"/>

                    <div class="left-side">
                        <label for="password">PASSWORD</label>
                        <input type="password" name="password" id="password"/>
                    </div>

                    <div class="right-side">
                        <label for="confirm-pass">RE ENTER PASSWORD</label>
                        <input type="password" name="confirm-pass" id="confirm-pass"/>
                    </div>

                    <label for="email">EMAIL</label>
                    <input type="text" name="email" id="email"/>

                    <label for="cell-no">MOBILE NUMBER</label>
                    <input type="text" name="cell-no" id="cell-no"/>

                    <div class="address-left-side">
                        <label for="cell-no">STREET</label>
                        <input type="text" name="street" id="street"/>

                        <label for="area">AREA</label>
                        <input type="text" name="area" id="area"/>
                    </div>

                    <div class="address-right-side">
                        <label for="city">CITY</label>
                        <input type="text" name="city" id="city"/>

                        <label for="zipcode">ZIPCODE</label>
                        <input type="text" name="zipcode" id="zipcode"/>
                    </div>

                </div>

                <button name="submit" type="submit" class="send-message">Enter</button> 
            </form>
        </div>
    </div>
</body>
</html>