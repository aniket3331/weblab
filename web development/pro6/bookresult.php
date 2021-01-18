<html>
    <body>
        <?php
		    $con = mysqli_connect("localhost","root","") or die(mysqli_error($con));
		    mysqli_select_db($con, "program6") or die(mysqli_error($con));
            $result = mysqli_query($con, "select * from books where title= '$_POST[title]'");	
		    if(!$result)
		    {	
                echo "There is no record";
		    }
	        echo "<table border='1'><tr><th>Title</th><th>Author</th><th>Publisher</th><th>Date</th></tr>";
	        while($row = mysqli_fetch_array($result))
	        {
			    echo "<tr>";
			    echo "<td>" . $row['title'] . "</td>";
			    echo "<td>" . $row['author'] . "</td>";
			    echo "<td>" . $row['publisher'] . "</td>";
			    echo "<td>" . $row['date'] . "</td>";
			    echo "</tr>";
	        }
	        echo "</table>";
	        mysqli_close($con);
        ?> 
    </body>
</html>
