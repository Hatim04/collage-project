
<style>
	td{
		padding: 5px;
	}
  </style>
<?php

    session_start();
    
    include("config.php");
    include("header1.php");



    $sql="select * from signup";

    $res=mysqli_query($conn,$sql);

    echo "<table border=2 align='center'>";
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
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td>".$row[5]."</td>";
		echo "<td>".$row[6]."</td>";
		echo "<td>
		<a href='deletesignup.php?&delete=$row[0];' 
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



