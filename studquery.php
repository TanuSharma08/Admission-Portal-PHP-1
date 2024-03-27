<!DOCTYPE html>
<?php
	include("header.php");

	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mno=$_POST['mno'];
		$query=$_POST['query'];
	
		$q=mysqli_query($cn,"insert into studquery(name,email,mno,query,reply) values('$name','$email','$mno','$query','pending')");

		echo "<script>alert('Query Sent...')</script>";
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
	<h1>Student Query</h1>

		<input type="text" name="name" placeholder="Name" required>
		
		<input type="email" name="email" placeholder="Email" required>
		
		<input type="text" name="mno" placeholder="Mobile No." onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required>
		
		<textarea name="query" cols="39" rows="1" placeholder="Your Query" required></textarea>

		<div class="align"><input type="submit" name="submit" value="Submit" class="button"></div>		
	</div>			
	</form>
   </body>
</html>

<?php include("../footer.php"); ?>