<?php

include('dbconfig.php');  
error_reporting(0);

$vehID = $_GET['ei'];
$query = "CALL deleteVehicle('$vehID')";
$data = mysqli_query($conn,$query);

if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminVehicles.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>