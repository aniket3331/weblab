<?php
	$con = mysqli_connect("localhost","root","") or die(mysqli_error($con));
	mysqli_select_db ($con, "people") or die(mysqli_error($con));
       $sql="insert into person (fname, lname, age, address, pincode) values ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[address]', '$_POST[pincode]')";
       if (!mysqli_query($con, $sql))
	{	
           die('Error: ' . mysqli_error($con));
       }
       $result = mysqli_query($con, "select * from person");	
	if(!$result)
	{	
              echo "There is no record";
	}
	echo "<html><head><title>Results</title></head><body><table><tr><th>Firstname</th><th>Lastname</th><th>Age</th><th>Address</th><th>Pincode</th></tr>";
	while($row = mysqli_fetch_row($result))
	{
              echo "<tr>";
		echo "<td>" . $row[0] . "</td>";
		echo "<td>" . $row[1] . "</td>";
              echo "<td>" . $row[2] . "</td>";
              echo "<td>" . $row[3] . "</td>";
              echo "<td>" . $row[4] . "</td>";
		echo "</tr>";
	}
	echo "</table></body></html>";
	mysqli_close($con);
?>
