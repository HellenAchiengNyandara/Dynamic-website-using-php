<?php

include('dbconfig.php');  
error_reporting(0);

$branID = $_GET['ei'];
$query = "CALL deleteBranch('$branID')";
$data = mysqli_query($conn,$query);

if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminBranches.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>