<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle</title>
    <link rel="stylesheet" href="adminVehicle.css?1422585377">
</head>
<body>
        
    
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img"src="images/adminAVA.png" alt="admin picture">
            <div id="about-admin">
                <h3>Sadia Rehman</h3>
                <h4>Branch ID:  1</h4>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="managerDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="managerEmployee.php"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="managerVehicles.php" class="active" style="color: #14B8A6"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="managerProduct.php"><img src="images/categories-products.svg" alt=""> Bakery Stock</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

    
    <main>

        <table>
            <tr>
                <th>vehicleId</th>
                <th>vehicleName</th>
                <th>empId</th>
            </tr>

            <?php

            include('dbconfig.php');

            $sql = "SELECT vehicleID, vehicleName, empID FROM empbranch JOIN empposition USING (empID) JOIN vehicle USING (empID) 
            WHERE branchID = 1 AND positionID = 16";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["vehicleID"]."</td><td>".$row["vehicleName"]."</td><td>".$row["empID"]."</td></tr>";
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