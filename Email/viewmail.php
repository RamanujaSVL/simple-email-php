<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Message</title>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<style>
.ab{color:#000000;font-size:18px;font-weight:500;}
a{text-decoration:none;color:#6A04F9;font-size:20px}
</style>
</head>

<body>
<div class="compose_blg" style="margin:30px auto;padding: 100px 0;background:url(body.png);border: 1px solid #000;max-width: 680px;
    width: 100%;border:1px solid #cccccc;border-radius:7px;">
    <p style="font-size:18px;background-color:#9fcb4b;color:white;border:none;width:100%; height:42px; border-radius:7px; padding:10px 0px;margin-bottom:30px;text-align:center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold">MESSAGE</p>
<center>
<table width="100%" style="max-width:400px;margin-left:160px">
	<?php
session_start();
	$current_user=$_SESSION['name'];
	echo"<p style='text-align:center;font-size:15px;font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold;margin-right:260px'>Current User:$current_user</p>";
$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="ramanuja";
	$tbl_name="message";
	$temp=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysqli_select_db($temp,"$db_name")or die("cannot select DB");
	$sql="SELECT * FROM `message` WHERE msgid='".$_GET['id']."'";
	$result=mysqli_query($temp,$sql);
	$row = mysqli_fetch_assoc($result);
	echo "<br>"; 
	echo "<p class='ab'>From: ".$row["from_mail"]."</p>";
	echo "<br>"; 
	echo "<p class='ab'>Sub: ".$row["subject"]."</p>";
	echo "<br>"; 
	echo "<p class='ab'>Message:<br>".$row["message"]."</p>";
	?>
    </table>
    <a href="Inbox.php">Back to Inbox</a>
    </center>
    </div>
</body>
</html>