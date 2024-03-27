<!DOCTYPE html>
<?php
	include("header.php");

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mno=$_POST['mno'];
		$feedback=$_POST['feedback'];
	
		$q=mysqli_query($cn,"insert into feedback(name,email,mno,feedback) values('$name','$email','$mno','$feedback')");

		echo "<script>alert('Thank you for your feedback...')</script>";
	}
?>

<html>
   <head>
    	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="style.css">
   </head>
   <body>
	<form method="POST" action="">
	<div class="container">
	<h1>Feedback</h1>

		<input type="text" name="name" placeholder="Name" required>

		<input type="email" name="email" placeholder="Email" required>

		<input type="text" name="mno" placeholder="Mobile No." onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required>

		<textarea name="feedback" cols="39" rows="1" placeholder="Feedback" required></textarea>
	
		<div class="align"><input type="submit" name="submit" value="Submit" class="button"></div>		
	</div>			
	</form>
   </body>
</html>

<?php include("../footer.php"); ?>