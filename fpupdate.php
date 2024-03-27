<?php
	$cn=mysqli_connect("localhost","root","","aavishkar_institute");

    	if(isset($_POST['submit']))
    	{
	    	$mno=$_POST['mno'];
	    	$email=$_POST['email'];
        		$password=$_POST['password'];
        		$confirmpassword=$_POST['confirmpassword'];

        		$q=mysqli_query($cn,"select mno from user_login where email='$email' and mno='$mno'");
    
        		if(mysqli_num_rows($q)!=0)
        		{	
            			$q=mysqli_query($cn,"update user_login set password='$password' where mno='$mno'");
            			echo "<script>alert('Your Password Updated Successfully...')</script>";	
        		}
        		else
        		{
            			echo "<script>alert('Please enter a valid email or mobile no. ....')</script>";	
        		}
    	}
    	echo "<script>window.location='login.php'</script>";
?>

