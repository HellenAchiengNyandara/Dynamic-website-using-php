<?php
                 
                include('dbconfig.php'); 
                session_start();
                $customEmail = $_SESSION["cusEmail"];
                $customPass = $_SESSION["cusPass"]; 
                
                $query = "CALL addToCart('$customEmail', '$customPass', '63')";
                $data = mysqli_query($conn,$query);
                if ($data) {
                header("Location: customerPizza.php");    
                }

                else {
                    echo "
                        <script type= 'text/javascript'>
                            alert('Deletion failed!');
                        </script>";
                }

                ?>