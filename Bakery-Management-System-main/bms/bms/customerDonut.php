<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donuts</title>
    <link rel="stylesheet" href="customerDonut.css">
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
        <h1>Donuts</h1>

        <div class="fudge">
            <h2>Chocolate Fudge</h2>
            <img src="images/choc-fudge.jpg" alt="">
            <h2>Rs. 250</h2>
            <button type="button" class="check">ADD TO CART</button>

        </div>
        
        <div class="hazelnut">
            <h2>Hazelnut Donut</h2>
            <img src="images/hazelnut.jpg" alt="">
            <h2>Rs. 200</h2>
            <button type="button" class="check1">ADD TO CART</button>
        </div>

        <div class="glazed">
            <h2>Glazed Donut</h2>
            <img src="images/glazed.jpeg" alt="">
            <h2>Rs. 150</h2>
            <button type="button" class="check2">ADD TO CART</button>
        </div>

        <div class="choc-filled">
            <h2>Chocolate Filled</h2>
            <img src="images/choc-filled.jpg" alt="">
            <h2>Rs. 300</h2>
            <button type="button" class="check3"><a href="addChocoFilledDonut.php" style="color:#ffffff; text-decoration:none" >ADD TO CART</a></button>
        </div>
        
        <div class="powdered">
            <h2>Sugar Icing</h2>
            <img src="images/powdered.jpg" alt="">
            <h2>Rs. 100</h2>
            <button type="button" class="check4">ADD TO CART</button>

        </div>

        <div class="coconut">
            <h2>coconut Donut</h2>
            <img src="images/coconut.jpg" alt="">
            <h2>Rs. 200</h2>
            <button type="button" class="check5">ADD TO CART</button>
        </div>

        <div class="plain">
            <h2>Plain Donut</h2>
            <img src="images/plain.jpg" alt="">
            <h2>Rs. 100</h2>
            <button type="button" class="check6">ADD TO CART</button>
        </div>

        <div class="marble">
            <h2>Chocolate Marble</h2>
            <img src="images/marble.jpg" alt="">
            <h2>Rs. 200</h2>
            <button type="button" class="check7">ADD TO CART</button>

        </div>

        <div class="oreo">
            <h2>Oreo Donut</h2>
            <img src="images/oreo.jpg" alt="">
            <h2>Rs. 300</h2>
            <button type="button" id = addToCartButton class="check8"><a href="addOreoDonut.php" style="color:#ffffff; text-decoration:none" >ADD TO CART</a></button>
        </div>

</div>
    </main>

</body>
</html>