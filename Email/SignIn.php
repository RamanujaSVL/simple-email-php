<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<script>
function myfun()
{
alert("Invalid Credentials!");
}
</script>
<title>Log in User</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>
    <body>
      <div class="logincontainer">
      <p style="font-size:18px;background-color:#9fcb4b;color:white;border:none;width:100%; height:42px; border-radius:7px; padding:10px 0px;margin:20px 0px;text-align:center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold">LOG IN PAGE</p>
         <div class="loginwrap">
            <form method="POST">            
               <p><input type="text" placeholder="Email" name="mail" required="required"/>
               <input type="password" placeholder="Password" name="psswd" required="required"/>
               </p>
               <input type="submit" value="Sign In" name="login" />
              </form>
           <div class="donthaveacc"><a href="Registration.php">Not a User Sign Up</a></div>
           <div class="donthaveacc"><a href="Index.php">WELCOME PAGE</a></div>
         </div>
      </div>
    </body>
</html>
<?php
	require 'Connections/ram.php';
	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="ramanuja";
	$tbl_name="userbase";

		// Connect to server and select databse.
		$temp=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
		mysqli_select_db($temp,"$db_name")or die("cannot select DB");
		if(isset($_POST['login']))
		{
			$em=$_POST['mail'];
			$pw=$_POST['psswd'];
			if($em!=""&&$pw!="")
			$sql="SELECT *FROM userbase WHERE email='$em' AND passwd='$pw'";
			$result=mysqli_query($temp,$sql);
			
			if($result==false)
			{
				die(mysql_error());
			}
			//checks whether Username is correct or not
			$count=mysqli_num_rows($result);
			
			session_start();
			$_SESSION['name']=$em;
			//if correct
			if($count>0)
			header('Location:Home.php');
			//if wrong
			else
			echo"<script>myfun();</script>";
		}
?>
