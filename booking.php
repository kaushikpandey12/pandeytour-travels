<?php 

	$con=mysqli_connect('localhost','root');
	

	mysqli_select_db($con,'tour&travels');

	if(isset($_POST['insertdata']))
	{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$city=$_POST['city'];
	// echo '$City';die;
	$address=$_POST['address'];

	$query="INSERT INTO bookingdata(fname,lname,email,mobile,city,address) VALUES('$fname','$lname','$email','$mobile' ,'$city','$address')";
					
	$query_run= mysqli_query($con, $query);




		if($query_run)

		{
			echo '<script> alert ("Data submited ,we will contact you shortly") </script>';
			 header('location:exploreplace.php');
		}
		else
		{
			echo '<script> alert("mail not sent") </script>';
		}
		}
 ?>