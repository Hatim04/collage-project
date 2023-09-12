<?php

    session_start();

    include("config.php");

    $email=$_POST['footer_email'];

    $sql="insert into f_mail (email) values ('$email')";

    $res=mysqli_query($conn,$sql);
    if($res==1)
    {
        header("location:home1.php");
    }
    else
    {
        echo "Error in getting email";
    }

?>