<?php

    include("config.php");
    // $id=$_GET['delete'];
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        // $table = $_GET['table'];

        $sql="delete from contact where id=$id";

        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
            echo "Error in delete";
        }
        else
        {
            header("location:contactdata.php");
        }
    }
    else {
        echo "Something went worng";
    }

?>