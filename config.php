<?php

    session_start();

    $servername="localhost";
    $username="root";
    $password="";
    $db="elite";

    $conn=mysqli_connect($servername,$username,$password,$db);

    if(!$conn)
    {
        die("connection failed".mysqli_connect_errno());
    }
?>

