<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");
	
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];
	$email=$_POST['email'];
	$mno=$_POST['mno'];
	$password=$_POST['password'];

	$q=mysqli_query($cn,"update user_login set fnm='$fnm',lnm='$lnm',email='$email',mno='$mno',password='$password' where mno='$mno'");	
	
	echo "<script>alert('Profile Updated Successfully....')</script>";
	echo "<script>window.location='profile.php'</script>";
?>