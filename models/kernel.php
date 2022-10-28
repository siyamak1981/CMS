<?php


function config(){
    $server="localhost";
    $user = "root";
    $password = "siyamak1981";
    $db="CMS";

    $connect = mysqli_connect($server,$user, $password, $db);
    return $connect;
}

?>