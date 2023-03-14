<?php
include "dbconfig.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['employee-name'];
    $phone_num = $_POST['phone-num'];
    $emp_street = $_POST['street'];
    $emp_area = $_POST['area'];
    $emp_city = $_POST['city'];
    $zip_code = $_POST['zip-code'];

    $insert1 = mysqli_query($conn,"INSERT INTO `address`(`street`, `area`, `city`, `zipCode`) VALUES ('$emp_street','$emp_area','$emp_city','$zip_code')");
    $insert2 = mysqli_query($conn,"INSERT INTO `empinfo`(`name`, `phoneNum`) VALUES ('$name','$phone_num')");

    if(!$insert1 || !$insert2)
    {
        echo $conn->error;
    }
    else
    {
        header("Location: adminEmployee.php");
    }
}

mysqli_close($conn); // Close connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link rel="stylesheet" href="addEmployee.css?1422585377">
</head>
<body>
    <div class="sidebar">

        <div class="admin-id">
            <img class="admin-img" src="images/adminAVA.png" alt="admin picture">
            <div id="about-admin">
                <h3>Syeda Fatima</h3>
                <h4>Production Center:  1</h4>
            </div>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li><a href="adminDashboard.php"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="adminCustomers.php"><img src="images/customers.svg" alt=""> Customers</a></li>
                <li><a href="adminEmployee.php" class="active" style="color: #14B8A6"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="adminGrantPriv.php"><img src="images/reg-admin.svg" alt=""> Grant Privileges</a></li>
                <li><a href="adminBranches.php"><img src="images/branches-vehicles.svg" alt=""> Branches</a></li>
                <li><a href="adminVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="adminCategory.php"><img src="images/categories-products.svg" alt=""> Categories</a></li>
                <li><a href="adminProduct.php"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li><a href="#"> Logout</a></li>
            </ul>
        </div>
    </div>

       
    <main>

        <nav>
            <h1>Add Employee</h1>
            <div class="add-employee">
    
                <form action="addEmployee.php" method="post" id="insert-form">
    
                    <div class="up-side">
                        <label for="employee-name">Employee Name</label>
                        <input type="text" required name="employee-name" id="employee-name">
    
                        <label for="phone-num">Phone Number</label>
                        <input type="text" required name="phone-num" id="phone-num">
                    </div>
    
                    <div class="left-side">
                        <label for="street">Street</label>
                        <input type="text" required name="street" id="street">
    
                        <label for="city">City</label>
                        <input type="text" required name="city" id="city">
                    </div>
    
                    <div class="right-side">
                        <label for="area">Area</label>
                        <input type="text" required name="area" id="area">
    
                        <label for="zip-code">Zip Code</label>
                        <input type="text" required name="zip-code" id="zip-code">
                    </div>
                    <button type="submit" class="send-message" name="submit"> <a"> SUBMIT </a> </button>
                </form>
            </div>
        </nav>

        <button class="addEmployee">
            <a href="addEmployee.php">+ Add Employee</a>
        </button>


        <table id="empTable">

            <tr>
                <th id = "id">empId</th>
                <th>name</th>
                <th>phoneNum</th>
                <th>addressId</th>
                <th>hireDate</th>
                <th>actionBar</th>
            </tr>


            <?php
            include('dbconfig.php');

            $sql = "SELECT empID, name, phoneNum, addressID, hireDate FROM empinfo";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["empID"]."</td><td>".$row["name"]."</td><td>".$row["phoneNum"]."</td>
                    <td>".$row["addressID"]."</td><td>".$row["hireDate"]."</td>
                    <td> <a id=deleteButton href=deleteEmp.php?ei=".$row["empID"].">Delete </td>
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