<?php
include_once 'kernel.php';
function user_login($data){
    $connection = config();

    $sql = "SELECT * FROM admin_tbl WHERE username = '$data[username]'";
    
    $row = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($row);
   if ($result){
    header("location:dashboard.php");
   }

}

?>