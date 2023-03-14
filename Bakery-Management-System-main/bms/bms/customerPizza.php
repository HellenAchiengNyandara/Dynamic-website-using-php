<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzas</title>
    <link rel="stylesheet" href="customerPizza.css">
</head>
<body>
    <!-- <img id="welcomebg" class="background"src="../main/images/product-bg.jpg" alt="background"> -->
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
    <div id="items">
        <h1>Pizzas</h1>

        <div class="tikka">
            <h2>Chicken Tikka</h2>
            <img src="images/tikka.jpg" alt="">
            <h2>Rs. 1500</h2>
            <button type="button" class="check">ADD TO CART</button>

        </div>
        
        <div class="bbq-chicken">
            <h2>BBQ Chicken</h2>
            <img src="images/bbq-chick.jpg" alt="">
            <h2>Rs. 1200</h2>
            <button type="button" class="check1">ADD TO CART</button>

        </div>

        <div class="hawaiian">
            <h2>Hawaiian Pizza</h2>
            <img src="images/hawwaain.jpg" alt="">
            <h2>Rs. 1200</h2>
            <button type="button" class="check2">ADD TO CART</button>

        </div>

        <div class="classic-cheese">
            <h2>Classic Cheese</h2>
            <img src="images/cheese.jpg" alt="">
            <h2>Rs. 1000</h2>
            <button type="button" class="check3">ADD TO CART</button>
 
        </div>
        
        <div class="pepperoni">
            <h2>Pepperoni</h2>
            <img src="images/pepperoni.jpg" alt="">
            <h2>Rs. 1200</h2>
            <button type="button" class="check4"><a href="addPepperoniPizza.php" style="color:#ffffff; text-decoration:none">ADD TO CART</a></button>
        </div>

        <div class="thin-crust">
            <h2>Italian Thin</h2>
            <img src="images/thin-crust-pizza.jpg" alt="">
            <h2>Rs. 1299</h2>
            <button type="button" class="check5">ADD TO CART</button>

        </div>

        <div class="crowncrust">
            <h2>Crowncrust</h2>
            <img src="images/crowncrust.jpg" alt="">
            <h2>Rs. 1000</h2>
            <button type="button" class="check6">ADD TO CART</button>

        </div>

        <div class="stuff">
            <h2>Stuff Crust</h2>
            <img src="images/stuffed-crust.jpeg" alt="">
            <h2>Rs. 1000</h2>
            <button type="button" class="check7">ADD TO CART</button>

        </div>

        <div class="sausage">
            <h2>Sausage Pizza</h2>
            <img src="images/sausage-pizza.jpg" alt="">
            <h2>Rs. 950</h2>
            <button type="button" class="check8">ADD TO CART</button>

        </div>

        </div>
    </main>
</body>
</html>