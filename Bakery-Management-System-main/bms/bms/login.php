<?php 
    // Start the session
    session_start();

    include('dbconfig.php');  
    error_reporting(0); 
    
    $sql = "SELECT email, password FROM customer WHERE email = '".$_POST["email"]."' and password = '".$_POST["pass"]."'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result);  
          
    if($count == 1){  
        $customerEmail = $_POST["email"];
        $customerPassword = $_POST["pass"];

        $_SESSION["cusEmail"]= $customerEmail;
        $_SESSION["cusPass"]= $customerPassword;

        echo "<h1> <center> Login successful </center> </h1>";

        header("Location: homeRegistered.html");
        exit();
    }  
    else{  
        //echo "<h1> Login failed. Invalid username or password.</h1>";  
    }     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">

</head>
<body>

    <div class="main">

        <img id= "login-background" src="images/login background.jpg" alt="login background">
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

        <div class="login">
            
            <form name="f1" onsubmit = "return validation()" method = "POST">
                <label for="email">EMAIL</label>
                <input type="text" id="email" name="email"/>

                <label for="pass">PASSWORD</label>
                <input type="password" id="pass" name="pass"/>

                <input type =  "submit" id = "btn" value = "Enter" /> 
            </form>

            <a href="#" class="forgot">Forgot Password</a>
        </div>

    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>    
</body>
</html>