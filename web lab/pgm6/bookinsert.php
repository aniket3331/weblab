<html>
<body>
	<?php
		$con = mysqli_connect("localhost","root","") or die(mysqli_error($con));
		mysqli_select_db ($con, "asap") or die(mysqli_error($con));
        $sql="insert into test1 (title, author, publisher) values ('$_POST[title]', '$_POST[author]', '$_POST[publisher]')";
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
