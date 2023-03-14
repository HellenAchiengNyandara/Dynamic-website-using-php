<?php

include('dbconfig.php');  
error_reporting(0);

// Start the session
session_start();

$reqID = $_GET['ri'];
$branID = $_GET['bi'];
$prodID = $_GET['ei'];
$qty= $_GET['qnty'];
$aID = $_SESSION["adminN"];
$apass = $_SESSION["adminP"];

$query1 = "CALL acceptRequest('$aID', '$apass', '$prodID', '$qty')";
$query2 = "CALL add_to_stock('$branID', '$prodID', '$qty')";
$query3 = "DELETE FROM requests WHERE requestID=$reqID";
$data1 = mysqli_query($conn,$query1);
$data2 = mysqli_query($conn,$query2);
$data3 = mysqli_query($conn,$query3);

if ($data1 || $data2 || $data3) {
    echo "
    <script type= 'text/javascript'>
        alert('Reuest Done!');
    </script>";
    header("Location: adminRequest.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Bruh Moment!');
        </script>";
}

?>