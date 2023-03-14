<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="customerOrderHistory.css">
</head>
<body>
    <img id="welcomebg" src="images/order-hist-bg.jpg" alt="background">
    <div class="navbar">
        <span id = "home"><a href="homeRegistered.html">HOME</a></span>
        <span id = "menu"><a href="menuRegistered.php">MENU</a></li>
        <span id = "spotlight"><a href="spotlightRegistered.php">SPOTLIGHT</a></li>
        <span id = "logo">Ambience</span>
        <span id = "order-history"><a href="customerOrderHistory.php">ORDER HISTORY</a></span>
        <span id = "cart"><a href="customerCart.php">CART</a></span>
        <span id = "logout"><a href="login.php">LOGOUT</a></span>
        <p id = "bakery"> BAKERY </p>
    </div>

    <main>

        <div class="table">
            <table>
                <tr>
                    <th>Order Date</th>
                    <th>Product</th>
                    <th>Price</th>
                </tr>

                <?php
                include('dbconfig.php');

                // Start the session
                session_start();


                $customEmail = $_SESSION["cusEmail"];
                $customPassword = $_SESSION["cusPass"];

                $sql = "CALL displayOrderHistory('$customEmail', '$customPassword')";  
                $result = $conn -> query($sql);
                    
                if($result-> num_rows > 0) {  
                    while($row = $result-> fetch_assoc()) {
                        echo "<tr><td>".$row["date"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td></tr>";

                    }
                    echo "</table>";  
                }  
                else {  
                    echo "<tr>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    </tr> ";
                } 

                ?>
            </table>
        </div>
    </main>
</body>
</html>