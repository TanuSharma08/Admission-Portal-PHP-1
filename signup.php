<!DOCTYPE html>
<?php	
	include("header.php");

	if(isset($_POST['submit']))
	{
		$fnm=$_POST['fnm'];
		$lnm=$_POST['lnm'];
		$email=$_POST['email'];
		$mno=$_POST['mno'];
		$password=$_POST['password'];
		$usertype=$_POST['usertype'];
	
		$q=mysqli_query($cn,"select mno from user_login where email='$email' or mno='$mno' or password='$password'");
		if(mysqli_num_rows($q)!= 0)
		{
			echo "<script>alert('The user already exists')</script>";
			echo "<script>window.location='signup.php'</script>";
		}
		else
		{
			$q=mysqli_query($cn,"insert into user_login(fnm,lnm,email,mno,password,usertype) values('$fnm','$lnm','$email','$mno','$password','user')");
			echo "<script>alert('Registered as User...')</script>";
			echo "<script>window.location='login.php'</script>";
		}
	}
?>

<html>
   <head>
	<link rel="stylesheet" href="style.css">
   </head>
   <body vlink="blue">
   	<form method="POST" action="">
		
	<div class="container">
	<h1>Sign Up</h1>
		
		<input type="text" name="fnm" placeholder="First Name" required>
		
		<input type="text" name="lnm" placeholder="Last Name" required>

		<input type="email" name="email" placeholder="Email" required>

		<input type="text" name="mno" placeholder="Mobile No." onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required>

   		<input type="password" name="password" placeholder="Password" required>
    
    		<div class="align"><input type="submit" name="submit" value="Sign Up" class="button">
		<footer>Already a member?<a href="login.php">Login</a></footer></div>
  	</div>
	</form>
   </body>
</html>

<?php include("footer.php"); ?>