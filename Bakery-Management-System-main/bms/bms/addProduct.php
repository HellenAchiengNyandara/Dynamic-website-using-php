<?php
include "dbconfig.php"; // Using database connection file here
	
    $p_name = $_POST['product-name'];
    $p_price = $_POST['price'];
    $p_category = $_POST['category'];
    $p_quantity = $_POST['quantity'];
    $categID = "CALL getCategoryID('$p_category')";
    if($result-> num_rows > 0) {
        $insert1 = mysqli_query($conn,"INSERT INTO `product`(`name`, `price`, `categoryID`) VALUES ('$p_name','$p_price','$categID')");
        $insert2 = mysqli_query($conn, "UPDATE TABLE category SET categoryItems = categoryItems + $p_quantity WHERE categoryID=$categID");
        if(!$insert1 || $insert2) {
            echo $conn->error;
        }
        else
        {
            echo "Record added successfully.";
        }
    }

    else {
        $insert3 = mysqli_query($conn,"INSERT INTO `category`(`name`, `categoryItems`) VALUES ('$p_category','$p_quantity')");
        $insert4 = mysqli_query($conn,"INSERT INTO `product`(`name`, `price`, `categoryID`) VALUES ('$p_name','$p_price','$categID')");
        if(!$insert3 || $insert4) {
            echo $conn->error;
        }
        else
        {
            echo "Record added successfully.";
        }
    }

    if(!$insert1 || !$insert2 || !$insert3 || !$insert4)
    {
        echo $conn->error;
    }
    else
    {
        echo "Record added successfully.";
    }



mysqli_close($conn); // Close connection
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="addProduct.css">
</head>
<body>
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img"src="images/adminAVA.png" alt="admin picture">
            <h3>Syeda Fatima</h3>
            <h4>Production Center:  1</h4>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="adminDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="adminCustomers.php"><img src="images/customers.svg" alt=""> Customers</a></li>
                <li><a href="adminEmployee.php"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="adminGrantPriv.php"><img src="images/reg-admin.svg" alt=""> Grant Privileges</a></li>
                <li><a href="adminGrantPriv.php"><img src="images/branches-vehicles.svg" alt=""> Branches</a></li>
                <li><a href="adminVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="adminCategory.php"><img src="images/categories-products.svg" alt=""> Categories</a></li>
                <li><a href="adminProduct.php" class="active" style="color: #14B8A6"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

           
    <main>
    <nav>

        <h1>Add Products</h1>
        <div class="add-product">

            <form action="adminProduct.php" method="post" id="insert-form">

                <div class="up-side">
                    <label for="product-name">Product Name</label>
                    <input type="text" required name="product-name" id="product-name">

                    <label for="price">Price</label>
                    <input type="text" required name="price" id="price">

                    <label for="category">Category Name</label>
                    <input type="text" required name="category" id="category">

                    <label for="quantity">Quantity</label>
                    <input type="text" required name="quantity" id="quantity">

                    <label for="quantity">Image URL</label>
                    <input type="i_url" required name="i_url" id="i_url">
                </div>

                <button type="submit" class="send-message" name="submit"> <a href="adminProduct.php"> SUBMIT </a> </button>
            </form>
        </div>

        </nav>

        <button class="addProduct">
            <a href="addProduct.php">+ Add Product</a>
        </button>
        <table>
            <tr>
                <th>productId</th>
                <th>name</th>
                <th>price</th>
                <th>categoryId</th>
                <th>actionBar</th>

            </tr>

            <?php

            include('dbconfig.php');

            $sql = "SELECT productID, name, price, categoryID FROM product";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["productID"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["categoryID"]."</td>
                   <td> <a id=deleteButton href=deleteProduct.php?ei=".$row["productID"]."> Delete </td>
                    </tr>";
                }

                echo "</table>";  
            }  
            else {  
                echo "<tr>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                <td> - </td>
                </tr> ";
            }
            
            ?>

        </table>
    </main>
</body>
</html>