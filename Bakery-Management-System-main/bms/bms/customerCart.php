<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="customerCart.css">
</head>
<body>


        <img id="welcomebg" src="images/cart-bg.jpg" alt="background">
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
        <div class="cart">

            <div class="list">
                <table class="table-tot">
                    <tr>
                        <td>PRODUCT</td>
                        <td>SUB-TOTAL</td>
                    </tr>
                    <?php
                    include('dbconfig.php');

                    $sql2 = "SELECT productName, price FROM cart";  
                    $result = $conn -> query($sql2);
                        
                    if($result-> num_rows > 0) {  
                        while($row = $result-> fetch_assoc()) {
                            echo "<tr><td>".$row["productName"]."</td><td>".$row["price"]."</td></tr>";

                        }
                        echo "</table>";  
                    }  
                    else {  
                        echo "<tr>
                        <td> - </td>
                        <td> - </td>
                        </tr> ";
                    } 

                    ?>
                </table>
            </div>

            <div class="total">
                <h3>TOTAL: 
                <?php
                include('dbconfig.php');
                error_reporting(0); 

                $sql2 = "SELECT SUM(price) AS totalAmount FROM cart";  
                $result2 = $conn -> query($sql2);
                
                if($result2-> num_rows > 0) {

                   // $total_drops = $row['a'];
                   $row2 = $result2-> fetch_assoc();
                    $total = $row2['totalAmount'];
                    echo $total;

                }  
                else {  
                    echo "Record Not Found";
                }
            ?> </h3>
            </div>
        </div>

        <button type="button"><a href="checkout.php">CheckOut</a></button>
        </main>
</body>
</html>