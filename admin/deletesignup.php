<?php

    include("config.php");
    // $id=$_GET['delete'];
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        // $table = $_GET['table'];

        $sql="delete from signup where id=$id";

        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
            echo "Error in delete";
        }
        else
        {
            header("location:signupdata.php");
        }
    }
    else {
        echo "Something went worng";
    }

?>