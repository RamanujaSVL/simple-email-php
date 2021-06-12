<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Inbox</title>
<style>
a{text-decoration:none;color:#6A04F9;font-size:20px}
.ab{color:#FB5558;font-size:18px;font-weight:500;}
</style>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
</head>

<body>
<center>
<div class="compose_blg" style="margin-top:60px;padding: 100px 0;background:url(body.png);border: 1px solid #000;max-width: 680px;
    width: 100%;border:1px solid #cccccc;border-radius:7px;">
    <p style="font-size:18px;background-color:#9fcb4b;color:white;border:none;width:100%; height:42px; border-radius:7px; padding:10px 0px;margin-bottom:80px;text-align:center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold">INBOX</p>
<table width="100%" style="max-width:400px;margin-left:160px">
	<tr>
        <td class="ab">From:</td>
        <td class="ab">Sub:</td>
        <td class="ab">Time:</td>
    </tr>
<?php
session_start();
$host="localhost"; 
	$username="root"; 
	$password=""; 
	$db_name="ramanuja";
	$tbl_name="message";
	$temp=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
	mysqli_select_db($temp,"$db_name")or die("cannot select DB");
	$current_user=$_SESSION['name'];
	echo"<p style='text-align:center;font-size:15px;font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold;margin-right:260px'>Current User:$current_user</p>";
	$sql="SELECT * FROM `message` WHERE to_mail='{$current_user}'";
	$result=mysqli_query($temp,$sql);
	$count=mysqli_num_rows($result);
	if($count==0)
		{
			echo "<a>No Mail</a>";
		}
		else
		{
			while($row = mysqli_fetch_assoc($result)) 
			{	
				echo "<tr>";
				echo "<td><a href='viewmail.php?id=". $row["msgid"]. "'>". $row["from_mail"]. "</a> </td><td>" . $row["subject"]. "</td><td>"
				.$row["senttime"]."</td>";
				echo "</tr>";
			}
		}
	?>
    </table>
        <a href="Home.php"><br><br>Back to Home</a>
    </div>
    </center>
</body>
</html>