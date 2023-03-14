<?php

include('dbconfig.php');  
error_reporting(0);

$mngrID = $_GET['ei'];
$query1 = "CALL changeMain_role('$mngrID')";
$data = mysqli_query($conn,$query1);

if ($data) {
    echo "
    <script type= 'text/javascript'>
        alert('Record Deleted!');
    </script>";
    header("Location: adminGrantPriv.php");
}

else {
    echo "
        <script type= 'text/javascript'>
            alert('Deletion failed!');
        </script>";
}

?>