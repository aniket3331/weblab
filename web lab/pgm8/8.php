<html>
<body>
	<?php
		$con = mysqli_connect("localhost","root","") or die(mysqli_error($con));
		mysqli_select_db ($con, "test") or die(mysqli_error($con));
        $sql="insert into stud (fname, lname, age, address, pincode) values ('$_POST[fname]', '$_POST[lname]', '$_POST[age]', '$_POST[address]', '$_POST[pincode]')";
        if (!mysqli_query($con, $sql))
		{	
            die('Error: ' . mysqli_error($con));
        }
        echo "1 record added";
	    
        $result = mysqli_query($con, "select * from stud");	
		    if(!$result)
		    {	
                echo "There is no record";
		    }
	        echo "<table border=1><tr><th>Firstname</th><th>LastName</th><th>Age</th><th>Address</th><th>Pincode</th></tr>";
	        while($row = mysqli_fetch_array($result))
	        {
			    echo "<tr>";
			    echo "<td>" . $row['fname'] . "</td>";
          echo "<td>" . $row['lname'] . "</td>";
          echo "<td>" . $row['age'] . "</td>";
          echo "<td>" . $row['address'] . "</td>";
          echo "<td>" . $row['pincode'] . "</td>";
			    echo "</tr>";
	        }
	        echo "</table>";
	        mysqli_close($con);
        ?> 
    </body>
</html>