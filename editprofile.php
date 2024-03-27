<!DOCTYPE html>

<?php include("header.php"); ?>

<html>
<head>
	<link rel="stylesheet" href="prostyle.css">
<script>
		function myFunction()
		{
  			var x = document.getElementById("myInput");
  			if (x.type === "password")
			{
   				x.type = "text";
  			} 
			else
			{
    				x.type = "password";
  			}
		}
</script>
</head>
<body>
		<div class="container">
			<h1>Your Profile</h1>	

<?php

	session_start();
	$mno=$_SESSION['mno'];
	$query=mysqli_query($cn,"select * from user_login where mno=$mno");
	echo "<form method='POST' action='updprofile.php' enctype='multipart/form-data'>";
	
	while($rec=mysqli_fetch_array($query))
	{
		echo "<table align='center'><tr><td>First Name</td>
		<td><input type='text' name='fnm' value='".$rec[1]."'></td></tr>
		
		<tr><td>Last Name</td>
		<td><input type='text' name='lnm' value='".$rec[2]."'></td></tr>

		<tr><td>DOB</td>
		<td><input type='text' name='dob' value='".$rec[3]."'></td></tr>

		<tr><td>Photo</td>
		<td><input type='file' name='photo' value='".$rec[4]."'></td></tr>

		<tr><td>Email</td>
		<td><input type='email' name='email' value='".$rec[5]."'></td></tr>

		<tr><td>Mobile No</td>
		<td><input type='text' name='mno' value='".$rec[6]."'></td></tr>

		<tr><td>Address</td>
		<td><input type='text' name='address' value='".$rec[7]."'></td></tr>

		<tr><td>Password</td>
		<td><input type='password' name='password' id='myInput' value='".$rec[8]."'></td></tr>
		<tr><td></td><td><input type='checkbox' onclick='myFunction()'>Show Password</td></tr></table>";

		echo "<br><center><input type='submit' name='submit' class='button' value='Update Profile'></center>";
	}
	echo "</form>";
?>
</div>
</body>
</html>
<?php 
      include("footer.php");
 ?>