<!DOCTYPE html>
<?php
	include("header.php");

	if(isset($_POST['submit']))
	{	
		$fnm=$_POST['fnm'];
		$lnm=$_POST['lnm'];
 	    	$fathernm=$_POST['fathernm'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$adhaarno=$_POST['adhaarno'];
		$photo=$_FILES['photo']['name'];
        		$parentprof=$_POST['parentprof'];
	    	$codept=$_POST['codept'];
		$designation=$_POST['designation'];
       		$address=$_POST['address'];
       		$whatsappno=$_POST['whatsappno'];
		$email=$_POST['email'];
		$studmno=$_POST['studmno'];
   		$pmno=$_POST['pmno'];
		$lastexam=$_POST['lastexam'];
		$yrofpassing=$_POST['yrofpassing'];
		$instnm=$_POST['instnm'];
		$pr=$_POST['pr'];
		$std=$_POST['std'];	
		$schoolnm=$_POST['schoolnm'];	
    		$course=$_POST['course'];
		$sem=$_POST['sem'];
		$collegenm=$_POST['collegenm'];
	  	$othercourse=$_POST['othercourse'];
		
		$q=mysqli_query($cn,"select adhaarno from admission where adhaarno='$adhaarno'");
		if(mysqli_num_rows($q) != 0)
		{
			echo "<script>alert('The adhaar no. already exists')</script>";
			echo "<script>window.location='admission.php'</script>";
		}
		else
		{
			$q=mysqli_query($cn,"insert into admission(fnm,lnm,fathernm,dob,gender,adhaarno,photo,parentprof,codept,designation,address,whatsappno,email,studmno,pmno,lastexam,yrofpassing,instnm,pr,std,schoolnm,course,sem,collegenm,othercourse,status) values('$fnm','$lnm','$fathernm','$dob','$gender','$adhaarno','$photo','$parentprof','$codept','$designation','$address','$whatsappno','$email','$studmno','$pmno','$lastexam','$yrofpassing','$instnm','$pr','$std','$schoolnm','$course','$sem','$collegenm','$othercourse','pending')");

        			move_uploaded_file($_FILES['photo']['tmp_name'],"../images/".$_FILES['photo']['name']);
			echo "<script>alert('Applied for admission successfully...')</script>";
			echo "<script>window.location='messages.php'</script>";
		}	
	}
?>

<html>
   <head>
   	<meta charset="UTF-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		*{box-sizing: border-box;}
		body{
			background-image: url("../images/h1.png"); 
			background-size: cover;
			background-repeat: no-repeat;
		}
		h1 { 
		  	text-align: center;
		  	color: white;
		}
		.button {
  			font-size: 23px;
  			background-color: rgb(255, 255, 255);
  			color: rgb(26, 25, 25);
			margin: 30px;
  			padding: 5px 0px;
  			border: none;
  			cursor: pointer;
  			width: 150px;
  			opacity: 0.9;
		}

		.button:hover {
		  	opacity: 1;
		}
		 </style>
   </head>
   <body>
	<form method="POST" action="" enctype="multipart/form-data">
	<h1>Admission Form</h1>
	
	<table align="center" width="90%" cellpadding="5px" cellspacing="0px"> 

		<tr><td>First Name</td>
		<td><input type="text" name="fnm" size="30" required></td>

		<td>Last Name</td>
		<td><input type="text" name="lnm" size="30" required></td></tr>

        		<tr><td>Father's Name</td>
		<td><input type="text" name="fathernm" size="30" required></td>
	
		<td>DOB</td>
		<td><input type="date" name="dob" required></td></tr>

		<tr><td>Gender</td>
		<td><input type="radio" name="gender" value="female" required>Female
		<input type="radio" name="gender" value="male">Male
        		<input type="radio" name="gender" value="other">Other</td>
	
		<td>Photo</td>
		<td><input type="file" name="photo" required></td></tr>

        		<tr><td>Adhaar Number</td>
		<td><input type="text" name="adhaarno" size="30" onblur="(this.value<111111111111 || this.value>999999999999)?alert('Enter 12 digit Adhaar No.'):submit.focus()" required></td>

	  	<td>Parent's Profession</td>
    		<td><input type="text" name="parentprof" size="30"></td></tr>

		<tr><td>Company/Dept. Name</td>
		<td><input type="text" name="codept" size="30"></td>

		<td>Designation</td>
		<td><input type="text" name="designation" size="30"></td></tr>

        		<tr><td>Address</td>
		<td><textarea name="address" cols="30" required></textarea></td></tr>

        		<tr><td>Whatsapp No.</td>
		<td><input type="text" name="whatsappno" size="30" onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required></td>

        		<td>Email</td>
		<td><input type="email" name="email" size="30" required></td></tr>

        		<tr><td>Student's Mobile No.</td>
		<td><input type="text" name="studmno" size="30" onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()"></td>

        		<td>Parent's Mobile No.</td>
		<td><input type="text" name="pmno" size="30" onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required></td></tr>
    
        		<tr><td>Last(Appeared/Passed Exam)</td>  		
        		<td><input type="text" name="lastexam" size="30" required></td>

        		<td>Year of Passing</td>
        		<td><input type="text" name="yrofpassing" size="30" required></td></tr>

        		<tr><td>Name of Institute</td>
        		<td><input type="text" name="instnm" size="30" required></td>

        		<td>Percentage</td>
        		<td><input type="text" name="pr" size="30" required></td></tr>
    
        		<tr><td><h3>Commerce</h3></td><td></td>
		<td ><h3>Computer</h3></td></tr>

        		<tr><td>Standard</td>
		<td><input type="radio" name="std" value="11th & 12th" required>11<sup>th</sup> & 12<sup>th</sup>
		<input type="radio" name="std" value="12th">12<sup>th</sup></td>

		<td>Course</td>	
		<td><input type="radio" name="std" value="BCA">BCA
		<input type="radio" name="std" value="MCA">MCA</td>

		<tr><td>School Name</td>
		<td><input type="text" name="schoolnm" size="30"></td>

		<td>Semester</td>
        		<td><select name="sem">
        			<option value=" ">-- select sem --</option>
			<option>Sem-1</option>		
            			<option>Sem-2</option>
            			<option>Sem-3</option>
			<option>Sem-4</option>		
            			<option>Sem-5</option>
            			<option>Sem-6</option>
		</select></td></tr>

        		<tr><td>Other Courses</td>
		<td><select name="course">
			<option value=" ">--select course--</option>
			<?php
				$q=mysqli_query($cn,"select coursenm from courses where category not in('HSC (General)','UG', 'PG')");
				while($rec=mysqli_fetch_array($q))
				{
					echo "<option>".$rec[0]."</option>";
				}
			?>
		</select></td>


		<td>College Name</td>
		<td><input type="text" name="collegenm" size="30"></td></tr>

		<tr align="left"><td><b>Modes of Payment: Cash and Cheque</b></td></tr>
	</table>
       		<center><input type="submit" name="submit" class="button"></center>
	</form>
   </body>
</html>

<?php include("../footer.php"); ?>