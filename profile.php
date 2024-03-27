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
	$mno=$_SESSION['user'];
	$query=mysqli_query($cn,"select * from user_login where mno=$mno");
	echo "<form method='POST' action='updprofile.php' enctype='multipart/form-data'>";
	
	while($rec=mysqli_fetch_array($query))
	{
		echo "First Name
		<input type='text' name='fnm' value='".$rec[1]."' requierd>
		
		Last Name
		<input type='text' name='lnm' value='".$rec[2]."' requierd>

		Email
		<input type='email' name='email' value='".$rec[3]."' required>

		Mobile No.
		<input type='text' name='mno' value='".$rec[4]."' readonly>

		Password
		<input type='password' name='password' id='myInput' value='".$rec[5]."' readonly>
		<input type='checkbox' onclick='myFunction()'>Show Password";

		echo "<br><center><input type='submit' name='submit' class='button' value='Update Profile'></center>";
	}
	echo "</form>";
?>
	</div>
   </body>
</html>

<?php  include("../footer.php"); ?>