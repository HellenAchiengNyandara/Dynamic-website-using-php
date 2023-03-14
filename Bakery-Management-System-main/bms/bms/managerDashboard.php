<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager</title>
    <link rel="stylesheet" href="managerDashboard.css">
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
                <li><a href="managerDashboard.html" class="active" style="color: #14B8A6"><img src="images/dashboard.svg" alt=""> Dashboard</a></li>
                <li><a href="managerEmployee.php"><img src="images/employees.svg" alt=""> Employees</a></li>
                <li><a href="managerVehicles.php"><img src="images/branches-vehicles.svg" alt=""> Vehicles</a></li>
                <li><a href="managerProduct.php"><img src="images/categories-products.svg" alt=""> Bakery Stock</a></li>

                <li id="logout"><a href="admin.php"> Logout</a></li>
            </ul>
        </div>
    </div>

    <main>

        <div class="left-side">
            <div class="total-records">
                <div class="inner-text">
                <h4>Total Customers</h4>
                    <?php
                        include('dbconfig.php');

                        $sql = "SELECT COUNT(*) AS countCust FROM customer";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h3>".$row["countCust"]."</h3>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
                </div>
                <img src="images/Avatar.png" alt="">
            </div>
            <div class="total-records">
                <div class="inner-text">
                <h4>Total Categories</h4>
                    <?php
                        include('dbconfig.php');

                        $sql = "SELECT COUNT(*) AS countCateg FROM category";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h3>".$row["countCateg"]."</h3>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
                </div>
                <img src="images/Avatar.png" alt="">
            </div>
            <div class="total-records">
                <div class="inner-text">
                <h4>Total Vehicles</h4>
                    <?php
                        include('dbconfig.php');

                        $sql = "SELECT COUNT(*) AS countVehicle FROM vehicle";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h3>".$row["countVehicle"]."</h3>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
                </div>
                <img src="images/100forsum.png" alt="">
            </div>
        </div>

        <div class="right-side">
            <div class="total-records">
                <div class="inner-text">
                <h4>Total Employees</h4>
                    <?php
                        include('dbconfig.php');

                        $sql = "SELECT COUNT(*) AS countEmp FROM empinfo";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h3>".$row["countEmp"]."</h3>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
                </div>
                <img src="images/Avatar.png" alt="" srcset="">
            </div>
            <div class="total-records">
                <div class="inner-text">
                <h4>Branches</h4>
                    <?php
                        include('dbconfig.php');

                        $sql = "SELECT COUNT(*) AS countBranch FROM branch";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h3>".$row["countBranch"]."</h3>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
                </div>
                <img src="images/100forsum.png" alt="">
            </div>
            <div class="total-records">
                <div class="inner-text">
                <h4>Total Products</h4>
                    <?php
                        include('dbconfig.php');

                        $sql = "SELECT COUNT(*) AS countProduct FROM product";  
                        $result = $conn -> query($sql);
                        
                        if($result-> num_rows > 0) {  

                            $row = $result-> fetch_assoc();
                            echo "<h3>".$row["countProduct"]."</h3>";

                        }  
                        else {  
                            echo "Record Not Found";
                        }
                    ?>
                </div>
                <img src="images/100forsum.png" alt="">
            </div>
        </div>
        </div>
    </main>
</body>
</html>