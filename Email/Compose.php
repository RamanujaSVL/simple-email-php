<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<title>Compose Page</title>
<style>
.compose_blg input[type="submit"]{  background:#9fcb4b; font-size:17px; height:42px; border-radius:7px; padding:10px;color:#fff; 
									text-align:center;display:block;margin:3px 0px 4px 330px;width:100%;max-width:70px}

.compose_blg input[type="text"] 

{ border:2px solid #ffcc99; width:100%; max-width:400px; height:42px; margin-top:10px;border-radius:7px; padding:0px 10px;display:block}

.message{border:2px solid #ffcc99;  margin-top:10px;border-radius:7px;padding:10px}

a{text-decoration:none;color:#6A04F9;font-size:20px;margin:30px 0px 10px 430px;text-align:center}

span{text-decoration:none;font-size:20px;margin:0px  0px 100px 600px;text-align:center;background:red;padding:5px;color:fff;border-radius:7px}
</style>
</style>
</head>

<body>
<div class="border" style="border:inset #F88B8C 7px;border-radius:70px;padding:25px;margin-top:1px;background:url(body.png)"> 	 
<h1 style=" align-content:center;color:#fff;background-color:#F8D74C; height:42px; border-radius:7px; padding:10px;text-align:center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold;margin:17px">Compose Your Mail</h1>
<?php
if(true)
session_start();
$current_user=$_SESSION['name'];
echo"<p style='text-align:center;font-size:15px;font-weight:bold;margin-right:260px'>Current User:$current_user</p>";
?>
<div class="compose_blg" style="margin:10px 0px 0px 425px;">
<form action="#" method="post">
<input type="text" placeholder="To" name="to" required="required">
<input type="text" placeholder="Subject" name="sub" required="required">
<textarea cols="50" rows="15" placeholder="Enter Your Message" class="message" name="msg" required="required" style="opacity:0%"></textarea>
<input type="submit" value="SEND" name="send">
<?php   

	$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="ramanuja";
	$tbl_name="message";
	$temp=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysqli_select_db($temp,"$db_name")or die("cannot select DB");
	if(isset($_POST['send']))
	{
		$to_mail=$_POST['to'];
		$sub_mail=$_POST['sub'];
		$msg_mail=$_POST['msg'];
		
		$result=
		mysqli_query($temp,"INSERT INTO `ramanuja`.`message` (`msgid`, `from_mail`, `to_mail`, `subject`, `message`, `senttime`) 
		VALUES (NULL,'{$current_user}', '{$to_mail}', '{$sub_mail}', '{$msg_mail}', NOW());");
echo"</form></div>";
		if($result)
			echo"<span>Mail Sent!</span>";
			else
			echo"<span>Mail NOT Sent!".mysqli_error($temp)."</span>";
	}
?>
    <a href="Home.php"><br>Back to Dashboard</a>
</div>
</body>
</html>