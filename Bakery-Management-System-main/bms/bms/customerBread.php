<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bread</title>
    <link rel="stylesheet" href="customerBread.css">
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
        <h1>Bread</h1>

        <div class="plain">
            <h2>Plain Bread</h2>
            <img src="images/plain-bread.jpg" alt="">
            <h2>Rs. 500</h2>
            <button type="submit" class="check" >ADD TO CART</button>
        </div>
        
        <div class="butter">
            <h2>Butter Bread</h2>
            <img src="images/butter-bread.jpg" alt="">
            <h2>Rs. 500</h2>
            <button type="submit" class="check" ><a href="addBreadButter.php" style="color:#ffffff; text-decoration:none">ADD TO CART</a></button>
        </div>

        <div class="garlic">
            <h2>Garlic Bread</h2>
            <img src="images/garlic-bread.jpg" alt="">
            <h2>Rs. 600</h2>
            <button type="submit2" value="3" class="check2">ADD TO CART</button>

        </div>

        <div class="bran">
            <h2>Cake Rusk</h2>
            <img src="images/bran-bread.jpg" alt="">
            <h2>Rs. 570</h2>
            <button type="submit3" value="7" class="check3">ADD TO CART</button>

        </div>
        
        <div class="milky">
            <h2>Milky Bread</h2>
            <img src="images/Milky-Bread.jpg" alt="">
            <h2>Rs. 250</h2>
            <button type="submit4" value="12" class="check4">ADD TO CART</button>

        </div>

        <div class="flat">
            <h2>Flat Bread</h2>
            <img src="images/flat bun.jpg" alt="">
            <h2>Rs. 200</h2>
            <button type="submit5" value="6" class="check5">ADD TO CART</button>

        </div>

        <div class="dinner-roll">
            <h2>Dinner Roll</h2>
            <img src="images/Dinner-Roll.jpg" alt="">
            <h2>Rs. 100</h2>
            <button type="submit6" value="5" class="check6"><a href="addBreadDinnerRoll.php" style="color:#ffffff; text-decoration:none">ADD TO CART</a></button>

        </div>

        <div class="sheermal">
            <h2>Sheermal</h2>
            <img src="images/sheermal-bread.jpg" alt="">
            <h2>Rs. 600</h2>
            <button type="submit7" value="10" class="check7">ADD TO CART</button>

        </div>

        <div class="croissant">
            <h2>Croissant</h2>
            <img src="images/croissant1.jpg" alt="">
            <h2>Rs. 450</h2>
            <button type="submit8" value="4" class="check8" > ADD TO CART</button>
            
        </div>

</div>
    </main>

    
</body>
</html>