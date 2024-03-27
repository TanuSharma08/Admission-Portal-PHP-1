<!DOCTYPE html>
<?php
	include("header.php");
	$mno=$_SESSION['user'];
 ?>

<html>
   <head>
	<style>
		.index{
  			background: url("../images/in.png");
  			background-size: cover;
  			margin-top: 10px;
  			padding: 50px;
  			margin: 0;
  			margin-bottom: 80px;
		}
		h2{
			font-size: 28px;
  			color: rgba(0, 46, 107, 0.993);
		}

  	</style>
   </head>
   <body>
  	<div class="index"><center>
	<img src="../images/logo1.png" width="400px"><h2>AAVISHKAR INSTITUTE</h2></div>
<?php
	$query=mysqli_query($cn,"select * from user_login where mno=$mno");
	while($rec=mysqli_fetch_array($query))
	{
		echo "<h2 align='center'>".$rec[1].", Welcome To Aavishkar Institute</h2>";
	}
?>
	</center>  
   </body>
</html>

<?php include("../footer.php"); ?>