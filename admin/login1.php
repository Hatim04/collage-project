<?php


session_start();

include("config.php");

$adminusername=$_POST['adminusername'];
$adminpassword=$_POST['adminpassword'];

if($adminusername=='elite' && $adminpassword==123456)
{
    echo "<h1>ADMIN PAGE<h1>";
    header("location:dashboard.php");

}
else
{
    echo "<h1>Wrong ADMIN Username or password</h1>";
}

?>
