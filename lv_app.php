<!DOCTYPE html>
<?php
	include("header.php");
	
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$mno=$_POST['mno'];
		$subject=$_POST['subject'];
		$from_dt=$_POST['from_dt'];
		$to_dt=$_POST['to_dt'];
		$lv_reason=$_POST['lv_reason'];
		$status=$_POST['status'];
	
		$q=mysqli_query($cn,"insert into lv_app(name,email,mno,subject,from_dt,to_dt,lv_reason,status) values('$name','$email','$mno','$subject','$from_dt','$to_dt','$lv_reason','')");

		echo "<script>alert('Applied for leave...')</script>";
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
   <body>
	<form method="POST" action="">
	<div class="container">
	<h2>Leave Application</h2>

		<input type="text" name="name" placeholder="Name" required>
		
		<input type="email" name="email" placeholder="Email" required>
		
		<input type="text" name="mno" placeholder="Mobile No." onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required>

		<input type="text" name="subject" placeholder="Subject" required>

		<input type="text" name="from_dt" placeholder="From Date" required>

		<input type="text" name="to_dt" placeholder="To Date" required>
		
		<textarea name="lv_reason" cols="39" rows="1" placeholder="Feedback" required></textarea>

		<div class="align"><input type="submit" name="submit" value="Submit" class="button"></div>	
	</div>			
	</form>
   </body>
</html>

<?php include("../footer.php"); ?>