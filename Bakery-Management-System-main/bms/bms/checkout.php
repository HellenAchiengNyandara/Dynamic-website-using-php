<?php

session_start();
include('dbconfig.php'); 

$customEmail = $_SESSION["cusEmail"];
$customPass = $_SESSION["cusPass"]; 



$sql1 = "CALL addToOrder('$customEmail', '$customPass')";
$sql2 = "CALL addToOrderProducts()";
$sql3 = "DELETE FROM cart";
$data1 = mysqli_query($conn,$sql1);
$data2 = mysqli_query($conn,$sql2);
$data3 = mysqli_query($conn,$sql3);

if ($data1 && $data2 && $data3) {

   header("Location: customerOrderHistory.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Checkout Failed!');
        </script>";
}

?>