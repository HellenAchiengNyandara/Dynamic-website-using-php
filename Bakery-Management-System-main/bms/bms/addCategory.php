<?php
include "dbconfig.php"; // Using database connection file here

    $categ_name = $_POST['category-name'];
    $num_item = $_POST['no-of-item'];
    $categ_img = $_POST['i_url'];

    $insert1 = mysqli_query($conn,"INSERT INTO `category`(`name`, `categoryItems`, `image`) VALUES ('$categ_name','$num_item','$categ_img')");

    if(!$insert1)
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
    <title>Categories</title>
    <link rel="stylesheet" href="addCategory.css?1422585377">
</head>
<body>
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img"src="images/adminAVA.png" alt="admin picture">
            <div id="about-admin">
                <h3>Syeda Fatima</h3>
                <h4>Production Center:  1</h4>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="adminDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="adminCustomers.php"><img src="images/customers.svg" alt=""> Customers</a></li>
                <li><a href="adminEmployee.php"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="adminGrantPriv.php"><img src="images/reg-admin.svg" alt=""> Grant Privileges</a></li>
                <li><a href="adminGrantPriv.php"><img src="images/branches-vehicles.svg" alt=""> Branches</a></li>
                <li><a href="adminVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="adminCategory.php" class="active" style="color: #14B8A6"><img src="images/categories-products.svg" alt=""> Categories</a></li>
                <li><a href="adminProduct.php"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

       
    <main>

    <nav>

    <h1>Add Category</h1>
    <div class="add-category">

        <form action="adminCategory.php" method="post" id="insert-form">

            <div class="up-side">
                <label for="category-name">Category Name</label>
                <input type="text" name="category-name" id="category-name">
            </div>

            <div class="down">
                <label for="no-of-item">Number Of Items</label>
                <input type="text" name="no-of-item" id="no-of-item">
                <div class="img_url">
                <label for="no-of-item">Image URL</label>
                <input type="i_url" name="i_url" id="i_url">
                </div>

            </div>

            <button type="submit" class="send-message" name="submit"> <a href="adminCategory.php"> SUBMIT </a> </button>
        </form>
    </div>
    </nav>

        <button class="addCategory">
            <a href="addCategory.php">+ Add Category</a>
        </button>
        <table>
            <tr>
                <th>categoryId</th>
                <th>name</th>
                <th>categoryItems</th>
                <th>actionBar</th>

            <?php

            include('dbconfig.php');

            $sql = "SELECT categoryID, name, categoryItems FROM category";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["categoryID"]."</td><td>".$row["name"]."</td><td>".$row["categoryItems"]."</td>
                   <td> <a id= deleteButton href=deleteCategory.php?ei=".$row["categoryID"]."> Delete </td>
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