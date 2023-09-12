<?php

session_start();

include("config.php");

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$city=$_POST['city'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="insert into signup (name,email,number,city,username,password) values ('$name','$email','$number','$city','$username','$password')";

$res=mysqli_query($conn,$sql);
if($res==1)
{
    $sql1="insert into login (username,password) values ('$username','$password')";
    $res1=mysqli_query($conn,$sql1);

    header("location:login.php");
}
else
{
    echo "<h1>Error in signing in</h1>";
}

?>