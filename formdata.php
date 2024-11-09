<?php
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$conn=mysqli_connect("localhost","root","","portfolio") or die("Connection Failed");

		$name=mysqli_real_escape_string($conn,$_POST['name']);
		$mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
		$message=mysqli_real_escape_string($conn,$_POST['message']);

		$query="INSERT INTO messages(name,mobile,message) VALUES('$name','$mobile','$message')";

		if(mysqli_query($conn,$query))
		{
			echo "Inquery Sent :) I Will Call You Soon";
		}
		else
		{
			echo "Query Failed";
		}
	}
	else
	{
		die("Invalid Request");
	}

?>