<!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> -->

  <style>
	td{
		padding: 5px;
	}
  </style>
<?php



    session_start();
    
    include("config.php");
	include("header1.php");
    $sql="select * from login";

    $res=mysqli_query($conn,$sql);

	echo "<br>";
    echo "<table border=1 align='center'>";
	echo "<tr>";
	$no=mysqli_num_fields($res);
	for ($i=0;$i<$no;$i++)
	{
		$fieldinfo=mysqli_fetch_field_direct($res,$i);
		echo "<th>".$fieldinfo->name."</th>";
	}
		echo "<th> Action </th>";
	while($row=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>
		<a href='deletelogin.php?&delete=$row[0];' 
		class='btn btn-danger'>Delete
		</td>";
		echo "</tr>";
	}
	echo"</table>";

	?>

<div style="margin-top:2%">

</div>
<?php

	include ("footer.php");

    ?>    



