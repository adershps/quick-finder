<?php
session_start();
?>
<html>
<title>
LOGIN
</title>
<head>
<script type="text/javascript" src="login.js"></script>
<style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#FFFFFF; background-color:#1e90ff; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:skyblue; }
 </style>
</head>
<body background="background3.jpg">
<ul>
 <li><a href="mainpage.php">HOME</a></li>
 <li><a style="background-color:darkred" href="register.php">SIGNUP</a></li>
<li><a href="contact.php">CONTACT</a></li>
 <li><a href="about.php">ABOUT</a></li>  
</ul>
<br><br><br><br><br><br><br>
<form action="loginkey.php" method="post" name="login" onsubmit="return(validate());">
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
	<tr>
		<td colspan=3>
		<left><font size=25 style="color:darkred" ><b>LOG</b></font><font size=25 ><b>IN</b></font></left>
		</td>
	</tr>

	<tr>
		<td><font size=4><b>USERNAME:</b></font></td>
		<td><input type="text" name="username" id="username" size="30"></td>
	</tr>
	
	<tr>
		<td><font size=4><b>PASSWORD:</b></font></td>
		<td><input type="password" name="password" id="password" size="30"></td>
	</tr>
	<tr>
		<td></td><td><input type="submit" name="login" id="login" value="LOGIN" size="30"></td>
	</tr>
	<tr><td></td><td><?php
if(isset($_SESSION['username']) and isset($_SESSION['password']))
{
header("location:loginkey.php");
}	
if(isset($_SESSION['iu']))
{
session_unset();
session_destroy();
?>
<pre style="font-size:20px;color:darkred;"><b>INVALID USER</b></pre>
<a href="register.php" style="text-decoration:none;">REGISTER NOW!</a>
<?php
}
if(isset($_SESSION['ip']))
{
session_unset();
session_destroy();
?>
<pre style="font-size:20px;color:darkred;"><b>INVALID PASSWORD</b></pre>
<?php
}
?></td></tr>
</form>
</body>
</html>