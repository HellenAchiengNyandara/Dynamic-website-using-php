<?php

include('dbconfig.php');  
error_reporting(0);

// Start the session
session_start();

$prodID = $_GET['ei'];
echo $prodID;
$customEmail = $_SESSION["cusEmail"];
$customPass = $_SESSION["cusPass"];

/*if ($prodID = "4") {
    $query = "CALL addToCart('$customEmail', '$customPass', '4')";
    $data = mysqli_query($conn,$query);
    if ($data) {
       // header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}

if ($prodID = "1") {
    $query = "CALL addToCart('$customEmail', '$customPass', '1')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}
if ($prodID = "2") {
    $query = "CALL addToCart('$customEmail', '$customPass', '2')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}
if ($prodID = "3") {
    $query = "CALL addToCart('$customEmail', '$customPass', '3')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}
if ($prodID = "5") {
    $query = "CALL addToCart('$customEmail', '$customPass', '5')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}
if ($prodID = "6") {
    $query = "CALL addToCart('$customEmail', '$customPass', '6')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}
if ($prodID = "7") {
    $query = "CALL addToCart('$customEmail', '$customPass', '7')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}
if ($prodID = "12") {
    $query = "CALL addToCart('$customEmail', '$customPass', '12')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}

if ($prodID = "10") {
    $query = "CALL addToCart('$customEmail', '$customPass', '10')";
    $data = mysqli_query($conn,$query);
    if ($data) {
        //header("Location: customerBread.php");    
    }

    else {
        echo "
            <script type= 'text/javascript'>
                alert('Deletion failed!');
            </script>";
    }
}*/



?>