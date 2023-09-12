<?php

    session_start();
    session_unset();
    session_destroy();

    echo "<h1>Logged out successfully</h1>";

    header("refresh:3");

    header("location:index.php");

?>