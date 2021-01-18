<html>
<body>
	<?php
		$con = mysqli_connect("localhost","root","") or die(mysqli_error($con));
		mysqli_select_db ($con, "program6") or die(mysqli_error($con));
        $sql="insert into books (title, author, publisher,date) values ('$_POST[title]', '$_POST[author]', '$_POST[publisher]', '$_POST[date]')";
        if (!mysqli_query($con, $sql))
		{	
            die('Error: ' . mysqli_error($con));
        }
        echo "1 record added";
	    mysqli_close($con);
    ?>
	<form action="http://localhost/bookresult.php" method="POST">
			Title: <input type="text" name="title" />
				<input type="submit" />
	</form>
</body>
</html>
