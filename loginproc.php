<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");

	session_start();

	$mno=$_POST['mno'];
	$password=$_POST['password'];

	$login=$cn->query("select * from user_login where mno='$mno' and password='$password'");

		$fetch = $login->fetch_array();
		if($login->num_rows==1)
		{
			if($fetch['usertype']=='admin')
			{
				$_SESSION['admin']=$mno;
				header("location:admin/index.php");	
			}
			if($fetch['usertype']=='user')
			{
				$_SESSION['user']=$mno;
				header("location:user/index.php");	
			}
		}
		else
		{
			echo "<script>alert('Please enter a valid mobile no. or password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
?>