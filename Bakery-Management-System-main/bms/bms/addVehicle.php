<?php
include "dbconfig.php"; // Using database connection file here

	
    $v_name = $_POST['vehicleName'];
    $e_name = $_POST['employee-name'];

    $insert1 = mysqli_query($conn,"INSERT INTO `vehicle`(`vehicleName`,`empID`) VALUES ('$v_name','$e_name')");

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
    <title>Vehicle</title>
    <link rel="stylesheet" href="addVehicle.css?1422585377">
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
                <li><a href="adminBranches.php"><img src="images/branches-vehicles.svg" alt=""> Branches</a></li>
                <li><a href="adminVehicles.php" class="active" style="color: #14B8A6"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="adminCategory.php"><img src="images/categories-products.svg" alt=""> Categories</a></li>
                <li><a href="adminProduct.php"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

    
    <main>

        <nav>

        <h1>Add Vehicle</h1>
        <div class="add-vehicle">

            <form action="adminVehicles.php" method="post" id="insert-form">

                <div class="up-side">
                    <label for="vehicleName">Vehicle Name</label>
                    <input type="text" name="vehicleName" id="vehicleName">
                </div>

                <div class="down">
                    <label class="employee-name" for="employee-name">Employee ID</label>
                    <input type="text" name="employee-name" id="employee-name">
                </div>
                <button type="submit" class="send-message" name="submit"> <a href="adminVehicles.php"> SUBMIT </a> </button>
            </form>
        </div>
        </nav>

        <button class="addVehicle">
            <a href="addVehicle.php">+ Add Vehicle</a>
        </button>
        <table>

            <tr>
                <th>vehicleId</th>
                <th>vehicleName</th>
                <th>empId</th>
                <th>actionBar</th>

            </tr>

            <?php

            include('dbconfig.php');

            $sql = "SELECT vehicleID, vehicleName, empID FROM vehicle";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["vehicleID"]."</td><td>".$row["vehicleName"]."</td><td>".$row["empID"]."</td>
                    <td> <a id=deleteButton href=deleteVehicle.php?ei=".$row["vehicleID"]."> Delete </td>
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