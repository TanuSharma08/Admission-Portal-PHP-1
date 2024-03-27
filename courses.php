<! DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <head>
	<link rel="stylesheet" href="../coursestyle.css">
   </head>
   <body>
	<h1>Courses</h1>
	<table border="1px" bordercolor="black" cellpadding="10px" width="100%">

		<tr style="width:100%;">
		<th>Category</th>
		<th>Course</th>
		<th>Fees</th>
		<th>Duration</th>
		</tr>

<?php 
	$query = mysqli_query($cn,"select * from courses");

	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr>
		<td>".$rec[1]."</td>
		<td>".$rec[2]."</td>
		<td>".$rec[3]."</td>
		<td>".$rec[4]."</td>
		</tr>";		
	}

?>
	</table>
   </body>
</html>

<?php include("../footer.php"); ?>
