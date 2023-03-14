<?php

include('dbconfig.php');  
error_reporting(0);

$employeeID = $_GET['ei'];
$query = "CALL deleteEmployee('$employeeID')";
$data = mysqli_query($conn,$query);
if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminEmployee.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>