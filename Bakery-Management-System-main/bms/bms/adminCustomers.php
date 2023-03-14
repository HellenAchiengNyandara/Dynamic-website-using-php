<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminCustomers.css?1422585377">
    <title>Customers</title>
</head>
<body>
    
    
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img"src="images/adminAVA.png" alt="admin picture">
            <div id="about-admin">
                <h3>Sadia Rehman</h3>
                <h4>Production Center:  1</h4>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="adminDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="adminCustomers.php" class="active" style="color: #14B8A6"><img src="images/customers.svg" alt=""> Customers</a></li>
                <li><a href="adminEmployee.php"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="adminGrantPriv.php"><img src="images/reg-admin.svg" alt=""> Grant Privileges</a></li>
                <li><a href="adminBranches.php"><img src="images/branches-vehicles.svg" alt=""> Branches</a></li>
                <li><a href="adminVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="adminCategory.php"><img src="images/categories-products.svg" alt=""> Categories</a></li>
                <li><a href="adminProduct.php"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li id="logout"><a href="#"> Logout</a></li>
            </ul>
        </div>
    </div>

    <main>
        <table id = "cust-table">
            <tr>
                <th>cusId</th>
                <th>Name</th>
                <th>email</th>
                <th>contactNum</th>
                <th>addressId</th>
            </tr>
            
            <?php
            include('dbconfig.php');

            $sql = "SELECT cusID, name, email, contactNum, addressID FROM customer";  
            $result = $conn -> query($sql);
                
            if($result-> num_rows > 0) {  
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["cusID"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["contactNum"]."</td><td>".$row["addressID"]."</td></tr>";

                }
                echo "</table>";  
            }  
            else {  
                echo "<tr>
                <td> - </td>
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