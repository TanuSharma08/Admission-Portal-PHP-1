<!DOCTYPE html>
<?php
	include("header.php");

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mno=$_POST['mno'];
		$message=$_POST['message'];
	
		$q=mysqli_query($cn,"insert into contactus(name,email,mno,message) values('$name','$email','$mno','$message')");

		echo "<script>alert('Message Sent Successfully...')</script>";
	}
?>

<html>
   <head>
	<link rel="stylesheet" href="style.css">
   </head>
   <body>
	<form method="POST" action="contactus.php">
	<div class="container">
	<h1>Contact Us</h1>

	<input type="text" name="name"placeholder="Name"  required>

	<input type="email" name="email" placeholder="Email" required>

	<input type="text" name="mno" placeholder="Mobile No." onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required>

	<textarea name="message" cols="39" rows="1" placeholder="Message" required></textarea>
	
	<div class="align"><input type="submit" name="submit" value="Submit" class="button"></div>

	</div><br><br><br>
	</form>
   </body>
</html>

<?php include("footer.php"); ?>