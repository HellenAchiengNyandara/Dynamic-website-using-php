<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="adminProduct.css?1422585377">
</head>
<body>
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img"src="images/adminAVA.png" alt="admin picture">
            <h3>Sadia Rehman</h3>
            <h4>Branch ID:  1</h4>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="managerDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="adminBranches.php"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="managerVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="managerProduct.php" class="active" style="color: #14B8A6"><img src="images/categories-products.svg" alt=""> Bakery Stock</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

           
    <main>

        <table>
            <tr>
                <th>productId</th>
                <th>name</th>
                <th>price</th>
                <th>quantity</th>

            </tr>

            <?php

            include('dbconfig.php');

            $sql = "SELECT productID, name, price, quantity FROM bakerystock JOIN stockproducts USING (stockID)
            JOIN product USING (productID) WHERE branchID = 1";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["productID"]."</td><td>".$row["name"]."</td><td>".$row["price"]."</td><td>".$row["quantity"]."</td>
                  
                    </tr>";
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
    </main>
</body>
</html>