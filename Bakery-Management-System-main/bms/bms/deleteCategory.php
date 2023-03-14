<?php

include('dbconfig.php');  
error_reporting(0);

$categID = $_GET['ei'];
$query = "CALL deleteCategory('$categID')";
$data = mysqli_query($conn,$query);

if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminCategory.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>