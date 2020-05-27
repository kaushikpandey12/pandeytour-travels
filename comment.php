<?php 

	$con=mysqli_connect('localhost','root');
	
	if($con)
	{
		echo "connection successful";
	}
else
{
	echo "No connection";
}
	mysqli_select_db($con,'tour&travels');
	$user=$_POST['user'];
	$email=$_POST['email'];
	$mobile=$_POST['number'];
	$comments=$_POST['message'];

	$query=" INSERT INTO userinfo (username, email, mobile, comment) VALUES ('$user','$email','$mobile','$comments')";


		mysqli_query($con,$query);

		header('location:travel.php')
 ?>