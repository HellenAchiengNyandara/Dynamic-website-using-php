<?php
include "dbconfig.php"; // Using database connection file here

	
    $branch_capacity = $_POST['branchCapacity'];
    $branch_area = $_POST['area'];
    $city = $_POST['city'];
    $branch_mngr = $_POST['branchManager'];
    $contact_num = $_POST['contact-num'];
    $user = $_POST['username'];
    $pass = $_POST['m_password'];
    $salary = $_POST['salary'];
    $zip_code = $_POST['zip-code'];

    session_start();
    $a_user = $_SESSION["adminN"];
    $a_pass = $_SESSION["adminP"];

    $insert1 = mysqli_query($conn,"INSERT INTO manager(`name`, `contactNum`, `salary`) VALUES ('$branch_mngr','$contact_num','$salary')");
    $insert2 = mysqli_query($conn,"CALL setManagerLogin('$user','$pass')");
    $insert3 = mysqli_query($conn,"INSERT INTO location(`area`, `city`, `zipCode`) VALUES ('$branch_area','$city','$zip_code')");
    $insert4 = mysqli_query($conn, "INSERT INTO branch(`capacity`) VALUES('$branch_capacity')");
    $insert5 = mysqli_query($conn,"CALL addLocationID_branch()");
    $insert6 = mysqli_query($conn,"CALL addManagerID_branch('$branch_mngr)");
    $insert7 = mysqli_query($conn,"CALL addInvID_branch('timasyed','krunkerpro4860')");


    if(!$insert1 || !$insert2 || !$insert3 || !$insert4 || !$insert5 || !$insert6 || !$insert7)
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
    <title>Branches</title>
    <link rel="stylesheet" href="addBranch.css">
    <!-- ?1422585377 -->
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
                <li><a href="adminBranches.php" class="active" style="color: #14B8A6"><img src="images/branches-vehicles.svg" alt=""> Branches</a></li>
                <li><a href="adminVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="adminCategory.php"><img src="images/categories-products.svg" alt=""> Categories</a></li>
                <li><a href="adminProduct.php"><img src="images/categories-products.svg" alt=""> Products</a></li>
                <li><a href="adminRequest.php"><img src="images/requests.svg" alt=""> Requests</a></li>
                <li id="logout"><a href="#"> Logout</a></li>
            </ul>
        </div>
    </div>

    
    <main>
        <nav>
                <h1>Add Branch</h1>
                <div class="add-branch">
        
                    <form action="adminBranches.php" method="post" id="insert-form">
        
                        <div class="up-side">
        
                            <label for="capacity">Branch Capacity</label>
                            <input type="text" required name="branchCapacity" id="b_capacity">

                        </div>
        
                        <div class="left-side">

                            <label for="phone-num">Area</label>
                            <input type="text" required name="area" id="area">
                            
                            <label for="employee-name">Manager Name</label>
                            <input type="text" required name="branchManager" id="branch-manager">

                            <label for="username">Username</label>
                            <input type="text" required name="username" id="username">

                            <label for="salary">Salary</label>
                            <input type="text" required name="salary" id="salary">

                            

                        </div>
        
                        <div class="right-side">

                            <label for="contact-num">City</label>
                            <input type="text" required name="city" id="city">

                            <label for="contact-num">Contact Number</label>
                            <input type="text" required name="contact-num" id="contact-num">

                            <label for="zip-code">Password</label>
                            <input type="password" required name="m_password" id="m_password">

                            <label for="zip-code">Zip Code</label>
                            <input type="text" required name="zip-code" id="zip-code">
                        </div>
                        <button type="submit" class="send-message" name="submit"> <a href="adminBranches.php"> SUBMIT </a> </button>
                    </form>
                </div>
            </nav>

        <button class="addBranch">
            <a href="addBranch.php">+ Add Branch</a>
        </button>
        <table>
            <tr>
                <th>branchId</th>
                <th>capacity</th>
                <th>Establish Date</th>
                <th>Location ID</th>
                <th>ManagerID</th>
                <th>InventoryID</th>

            </tr>

            <?php

            include('dbconfig.php');

            $sql = "SELECT branchID, capacity, establishDate, locationID, managerID, inventoryID FROM branch";  
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0) {  
                
                while($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["branchID"]."</td><td>".$row["capacity"]."</td><td>".$row["establishDate"]."</td>
                    <td>".$row["locationID"]."</td><td>".$row["managerID"]."</td><td>".$row["inventoryID"]."</td>
                    <td> <a href=deleteBranch.php?ei=".$row["branchID"]."> Delete </td>
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