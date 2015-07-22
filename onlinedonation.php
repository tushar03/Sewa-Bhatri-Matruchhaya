<html>
<?php
$con=mysqli_connect("localhost","root","","donation");
// Check connection
if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: ". mysqli_connect_error();
  	}
// escape variables for security
$sql="INSERT INTO donationform (name,address,cno,state,receipt,amount,email)
		values('$_POST[name]','$_POST[address]','$_POST[cno]','$_POST[state]','$_POST[receipt]','$_POST[amount]','$_POST[email]')";

		if (!mysqli_query($con,$sql))
	{
		die('Error: '. mysqli_error($con));
	}
	
mysqli_close($con);
?>
<body>
<a href="onlinedonation.html">Click Here to donate</a>
</body>
</html>
