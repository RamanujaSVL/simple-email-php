<?php
//if(true)
session_start();
$current_user=$_SESSION['name'];
echo"<p style='text-align:center;font-size:15px;font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold;'>Current User:$current_user</p>";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<title>Home</title>
<style>
.compose_blg input[type="button"]{ width:100%; max-width:400px; background:#9fcb4b; font-size:17px; border:none; height:42px; border-radius:7px; padding:10px 0px;color:#fff; text-align:center;display:block;}
a{text-decoration:none}
</style>
</head>

<body>
	<center>
	<div class="compose_blg" style="margin-top:60px;padding: 100px 0;background:url(body.png);border: 1px solid #000;max-width: 680px;
    width: 100%;border:1px solid #cccccc;border-radius:7px;">
    <p style="font-size:18px;background-color:#9fcb4b;color:white;border:none;width:100%; height:42px; border-radius:7px; padding:10px 0px;margin-bottom:80px;text-align:center; font-family:Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight:bold">DASHBOARD</p>
		<form method="post" >        
            <a href="Compose.php"><input type="button" value="Compose" style="margin:30px"></a>
            <a href="Inbox.php"><input type="button" value="Inbox" style="margin:30px"></a>
            <a href="logout.php"><input type="button" value="Logout" style="margin:30px"></a>
        </form>
        <div class="user_details">
        </div>
    </div>
    </center>
</body>
</html>