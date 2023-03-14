<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="adminEmployee.css?1422585377">
</head>
<body>
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img" src="images/adminAVA.png" alt="admin picture">
            <div id="about-admin">
                <h3>Sadia Rehman</h3>
                <h4>Branch ID:  1</h4>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="managerDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="managerEmployee.php" class="active" style="color: #14B8A6"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="managerVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="managerProduct.php"><img src="images/categories-products.svg" alt=""> Bakery Stock</a></li>
                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

       
    <main>
        <table id="empTable">

            <tr>
                <th id = "id">empId</th>
                <th>name</th>
                <th>phoneNum</th>
                <th>addressId</th>
                <th>hireDate</th>
                <th>branchID</th>
            </tr>

            <!-- <tr>
                <td>1</td>
                <td>Hafsa</td>
                <td>0300-5555696</td>
                <td>12</td>
                <td>25-12-05</td>
                <td><button type="button" value="Delete Row" onclick="SomeDeleteRowFunction()">Delete</button></td>
            </tr> -->

            <!-- <div class="alert">
                <h4> Record Deleted!</h4>
            </div> -->


            <?php
            include('dbconfig.php');

            $sql = "SELECT empID, name, phoneNum, addressID, hireDate, branchID FROM empinfo JOIN empbranch USING (empID) WHERE branchID = 1;";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["empID"]."</td><td>".$row["name"]."</td><td>".$row["phoneNum"]."</td>
                    <td>".$row["addressID"]."</td><td>".$row["hireDate"]."</td>
                    <td>".$row["branchID"]."</td>
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
                <td> - </td>
                </tr> ";
            }
            ?>

        </table>

    </main>
    
</body>
</html>