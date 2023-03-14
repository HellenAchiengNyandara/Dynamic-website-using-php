<?php

include('dbconfig.php');  
error_reporting(0);

$reqID = $_GET['ei'];
$query = "CALL declineRequest('$reqID')";
$data = mysqli_query($conn,$query);

if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminRequest.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>