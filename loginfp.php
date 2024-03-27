<!DOCTYP html>
<?php include("header.php"); ?>

<html>
   <head>
	<link rel="stylesheet" href="style.css">
	<style>
		h2{
			color:white;
			text-align:center;
			font-size:30px;
		}
	</style>
	<script>
		function cpass()
		{
			var p1 = f1.password.value;
			var p2 = f1.confirmpassword.value;
			if(p1!=p2)
			{
				alert("Password Mismatch");
			}
		}
	</script>
   </head>
   <body vlink="blue">
   	<form method="POST" action="fpupdate.php" name="f1">
	<div class="container">
	<h2>Forgot Password</h2>

    		<input type="email" name="email" placeholder="Email" required>
	
		<input type="text" name="mno" placeholder="Mobile No." required>
    	
    		<input type="password" name="password" placeholder="Password" required>
		
    		<input type="password" name="confirmpassword" placeholder="Confirm Password" required onblur="cpass()">

    		<div class="align"><input type="submit" name="submit" value="Confirm" class="button"></div>
  	</div>
	</form>
   </body>
</html>