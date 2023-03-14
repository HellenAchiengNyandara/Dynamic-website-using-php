<?php
    // Start the session
    session_start();

    include('dbconfig.php');  
    error_reporting(0); 

    $sql = "SELECT username, password FROM adminlogin WHERE username = '".$_POST["username"]."' and password = '".$_POST["password"]."'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  


    $sql2 = "SELECT username, password FROM managerlogin WHERE username = '".$_POST["username"]."' and password = '".$_POST["password"]."'";  
    $result2 = mysqli_query($conn, $sql2);  
    $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
    $count2 = mysqli_num_rows($result2); 
          
    if($count == 1){  
        $adminName = $_POST["username"];
        $adminPass = $_POST["password"];

        $_SESSION["adminN"]= $adminName;
        $_SESSION["adminP"]= $adminPass;


        header("Location: adminDashboard.php");
        exit(); 
    } else if ($count2 == 1) {
        $managerName = $_POST["username"];
        $managerPass = $_POST["password"];

        $_SESSION["managerN"]= $managerName;
        $_SESSION["managerP"]= $managerPass;


        header("Location: managerDashboard.php");
        exit(); 

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <div class="main">

        <img id= "admin-background" src="images/login background.jpg" alt="admin background">
        <div class="welcome">
            <div class="navbar">
                <span id = "home"><a href="home.html">HOME</a></span>
                <span id = "menu"><a href="menu page.html">MENU</a></li>
                <span id = "spotlight"><a href="spotlight.php">SPOTLIGHT</a></li>
                <span id = "logo">Ambience</span>
                <span id = "login"><a href="login.php">LOGIN</a></span>
                <span id = "register"><a href="registration.php">REGISTER</a></span>
                <span id = "admin"><a href="admin.php">ADMIN</a></span>
                <p id = "bakery"> BAKERY </p>
            </div>
        </div>

        <div class="admin">
            <h2>Admin</h2>
            <form name="f2" action = "admin.php" onsubmit = "return validation()" method = "POST">
                <label for="username">USERNAME</label>
                <input type="text" id="username" name="username"/>

                <label for="password">PASSWORD</label>
                <input type="password" id="password" name="password"/>

                <input type="submit" class="send-message" value="Enter"/>
            </form>

            
            
            <a href="#" class="forgot">Forgot Password</a>
        </div>
    </div>

    <script>  
            function validation()  
            {  
                var adminid=document.f2.username.value;  
                var adminps=document.f2.password.value;  
                if(adminid.length=="" && adminps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(adminid.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (adminps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            } 
        </script>
        
        
        

</body>
</html>
