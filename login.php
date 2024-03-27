<!DOCTYPE html>
<?php include("header.php"); ?>

<html>
   <head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="loginstyle.css">
   </head>
   <body vlink="blue">
	<form method="POST" action="loginproc.php">
    	<div class="container">
	<h1>Login</h1>

		<input type="text" name="mno" placeholder="Mobile No." onblur="(this.value<1111111111 || this.value>9999999999)?alert('Enter 10 digit Mobile No.'):submit.focus()" required>

    		<input type="password" name="password" placeholder="Password" required>
    
    		<div class="align"><a href="loginfp.php">Forget Password?</a></div>
    		<input type="submit" name="submit" value="Log In" class="btn">
    		<footer>Not a member?<a href="signup.php">SignUp Now</a></footer>
      	</div>
  	</form>
   </body>
</html>

<?php include("footer.php"); ?>