<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="adminRequest.css?1422585377">
</head>
<body>
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img"src="images/adminAVA.png" alt="admin picture">
            <h3>Sadia Rehman</h3>
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
                <li><a href="adminProduct.php"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php" class="active" style="color: #14B8A6"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

           
    <main>
        <table>
            <tr>
                <th>requestId</th>
                <th>branchID</th>
                <th>productId</th>
                <th>quantity</th>
                <th>actionBar</th>

            </tr>

            <?php

            include('dbconfig.php');

            $sql = "SELECT requestID, branchID, productID, quantity FROM requests";  
            $result = $conn -> query($sql);

            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["requestID"]."</td><td>".$row["branchID"]."</td><td>".$row["productID"]."</td>
                    <td>".$row["quantity"]."</td>
                    <td> <a class=Accept href=acceptRequest.php?ri=".$row["requestID"]."&bi=".$row["branchID"]."&ei=".$row["productID"]."&qnty=".$row["quantity"]."> Accept</a> |&nbsp<a class=Delete href=deleteRequest.php?ei=".$row["requestID"]."> Delete </a></td>
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
                <td> - </td>
                </tr> ";
            }

            ?>

        </table>
    </main>
</body>
</html>