<?php

include('dbconfig.php');  
error_reporting(0);

$prodID = $_GET['ei'];
$query = "CALL deleteProduct('$prodID')";
$data = mysqli_query($conn,$query);

if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminProduct.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>