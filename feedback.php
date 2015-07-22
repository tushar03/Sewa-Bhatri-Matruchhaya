<?php
$con=mysqli_connect("localhost","root","","feedback_form");
// Check connection
if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: ". mysqli_connect_error();
  	}
// escape variables for security
$sql="INSERT INTO feedback (name,email,address,cno,state,comments)
		values('$_POST[name]','$_POST[email]','$_POST[address]','$_POST[cno]','$_POST[State]','$_POST[comments]')";

		if (!mysqli_query($con,$sql))
	{
		die('Error: '. mysqli_error($con));
	}
	echo "<h2>";
	echo "Your form is successfully submitted!!!!!";
	echo "</h2>";

mysqli_close($con);
?>
