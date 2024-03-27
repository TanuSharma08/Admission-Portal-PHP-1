<!DOCTYPE html>
<?php	
	include("header.php");

	if(isset($_POST['submit']))
	{
	    	$mno=$_POST['mno'];
	    	$email=$_POST['email'];
        		$password1=$_POST['password1'];
        		$password2=$_POST['password2'];

        		$q=mysqli_query($cn,"select mno from user_login where mno='$mno' and password='$password1'");
        		if(mysqli_num_rows($q)!=0)
        		{	
            			$q=mysqli_query($cn,"update user_login set password='$password2' where mno='$mno'");
            			echo "<script>alert('Your Password Updated Successfully...')</script>";	
        		}
        		else
        		{
            			echo "<script>alert('Please enter a valid email or mobile no. or password ....')</script>";	
        		}
	}
?>

<html>
   <head>
	<style>
		h2{
			color:white;
			text-align:center;
			font-size:30px;
		}
	</style>
    	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="style.css">
   </head>
   <body vlink="blue">
   	<form method="POST" action="">
	<div class="container">
    	<h2>Change Password</h2>

    		<input type="email" name="email" placeholder="Email" required>
	
		<input type="text" name="mno" placeholder="Mobile No." required>
    	
    		<input type="password" name="password1" placeholder="Old Password" required>
		
    		<input type="password" name="password2" placeholder="New Password" required>

    		<div class="align"><input type="submit" name="submit" value="Confirm" class="button"></div>
  	</div>
	</form>
   </body>
</html>

<?php include("../footer.php"); ?>