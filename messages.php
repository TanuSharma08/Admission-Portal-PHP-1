<!DOCTYPE html>
<?php
	include("header.php");
	$mno=$_SESSION['user'];
	
?>

<html>
   <head>
	<link rel="stylesheet" href="msgstyle.css">
   </head>
   <body>
   	<h1>Messages</h1>

	<div class="container">
	<?php
		$query=mysqli_query($cn,"select * from admission where studmno=$mno or pmno=$mno");
		while($rec=mysqli_fetch_array($query))
		{
			echo "".$rec[1]." ".$rec[2]." your admission is ".$rec[26].".<br><br>";
		}	

	?>
	</div>

	<div class="container">
 	<?php
		$query=mysqli_query($cn,"select * from messages");
		while($rec=mysqli_fetch_array($query))
		{
			echo "Date: ".$rec[3]."<br>
			Subject: ".$rec[1]."<br>
			Message: ".$rec[2]." <br><br>";
		}	

	?>
	</div>

	<div class="container">
	<?php
		$query=mysqli_query($cn,"select * from studquery where mno=$mno");
		while($rec=mysqli_fetch_array($query))
		{
			echo "Your Query: ".$rec[4]."<br>";
			echo "Answer: ".$rec[5].".<br><br>";
		}

	?>
	</div>

	<div class=container>
	<?php
		$query=mysqli_query($cn,"select * from lv_app where mno=$mno");
		while($rec=mysqli_fetch_array($query))
		{
			echo "".$rec[1]." ".$rec[2]." Your Leave is ".$rec[7].".";
		}

	?>
	</div>
   </body>
</html>

<?php include("../footer.php"); ?>