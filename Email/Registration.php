<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script>
function myfun()
{
alert("Email Id Already registered!");
}
</script>
<style>
span{text-align:center;font-size:18px;font-weight:300;color:#000000 }
</style>
<title>Register User</title>
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="logincontainer">
                      <p style="font-size:18px;background-color:#9fcb4b;color:white;border:none;width:100%; height:42px; border-radius:7px; padding:10px 0px;margin:20px 0px;text-align:center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold">Registration Page</p>
     <div class="loginwrap">
		<form method="post">   
           <input type="text" placeholder="Name" name="name"  required="required"/>
           <input type="text" placeholder="Mobile Number" name="phno" required="required"/>
            <input type="text" placeholder="Email" name="email" required="required"/>
           <input type="password" placeholder="Password" name="psswd" required="required"/> 
           <input type="submit" value="Create Account" name="submit" />
         </form>
           <div class="donthaveacc"><a href="SignIn.php">Already Registered Sign In</a></div>
           <div class="donthaveacc"><a href="Index.php">WELCOME PAGE</a></div>
     </div>
  </div>
</body>
</html>
<?php require 'Connections/ram.php'; ?>
<?php
if(isset($_POST['submit']))
{
	$uname=$_POST['name'];
	$umail=$_POST['email'];
	$mobile=$_POST['phno'];
	$pwd=$_POST['psswd'];
	$sql=$con->query("INSERT INTO userbase(name,mobile,email,passwd) VALUES('{$uname}','{$mobile}','{$umail}','{$pwd}')");
	if($sql)
	{
	header('Location:registrationsuccess.php');
	}
	else
	echo"<script>myfun();</script>";
}
?>