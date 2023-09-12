<?php

session_start();

include("config.php");

$name=$_POST['name'];
$number=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="insert into contact (name,number,email,message) values ('$name','$number','$email','$message')";

$res=mysqli_query($conn,$sql);
if($res==1)
{
    // $sql1="insert into contact (name,number,email,message) values ('$name',$number,'$email','$message')";
    // $res1=mysqli_query($conn,$sql1);

    header("location:home1.php");
}
else
{
    echo "Error in submitting form";
}

?>