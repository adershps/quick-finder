<?php
session_start();
?>
<html>
<title>
ADMINISTRATOR
</title>
<head>
<script type="text/javascript" src="changepw.js"></script>
<style>
 #customers { font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; width:100%; border-collapse:collapse; } #customers td, #customers th { font-size:1em; border:1px solid #ffffff; padding:3px 7px 2px 7px; } #customers th { font-size:1.1em; text-align:left; padding-top:5px; padding-bottom:4px; background-color:#2f4f4f; color:#ffffff; } #customers tr.alt td { color:#ffffff; background-color:#000000; } #customers tr td { color:#ffffff; background-color:; } 
 </style>
</head>
<body background="background4.jpg">
<form action="admin.php" method="post">
<input type="submit" name="continue" id="continue" value=" HOME "size="30">
</form>

<form action="cpw.php" method="post" name="StudentRegistration" onsubmit="return(validate());">
    
    <table cellpadding="2" width="40%" align="left"
	cellspacing="2">
<br><br><br><br><br><br><br><br><br><br>
	<tr>
		<td colspan=2>
		<center><font size=6><b><pre style="font-family:stencil std;font-size:50px;color:#ffffff;"><b>CHANGE PASSWORD</b></pre></b></font></center>
		</td>
	</tr>

	<tr>
		<td><pre style="font-family:stencil std;font-size:20px;color:#ffffff;"><b>PASSWORD</b></pre></td>
		<td><input type="password" name="password" id="password" size="30"></td>
	</tr>
	<tr>
		<td><pre style="font-family:stencil std;font-size:20px;color:#ffffff;"><b>NEW PASSWORD</b></pre></td>
		<td><input type="password" name="npassword" id="npassword" size="30"></td>
	</tr>
	<tr>
		<td><pre style="font-family:stencil std;font-size:20px;color:#ffffff;"><b>CONFIRM NEW PASSWORD</b></pre></td>
		<td><input type="password" name="cpassword" id="cpassword" size="30"></td>
	</tr>
	<tr>
	      <td><input type="reset"></td>
		<td colspan="2"><input type="submit" value="Apply" name="apply"><input type="hidden" name="editr" id="editr" value="<?php print $u; ?>" size="30"></td>
	</tr>
</table>

</form>












<?php
error_reporting(0);

?>
</body>
</html>