<html>
<title>
EDIT
</title>
<head>
<script type="text/javascript" src="edit.js"></script>

<style>
 #customers { font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; width:100%; border-collapse:collapse; } #customers td, #customers th { font-size:1em; border:1px solid white; padding:3px 7px 2px 7px; } #customers th { font-size:1.1em; text-align:left; padding-top:5px; padding-bottom:4px; background-color:; color:#ffffff; } #customers tr.alt td { color:#000000; background-color:; } 
 </style>
<style>
 .horizontal{width:100px; float:left;}
 </style> 
 
</head>
<body background="background5.jpg">
<?php

error_reporting(0);

if(isset($_POST['manage']))
{
$u=$_POST['manager'];

$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql="select * from student where username='".$u."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);   
}
?>
<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form>

<form action="editreturn.php" method="post" name="StudentRegistration" onsubmit="return(validate());">
    
    <table cellpadding="2" width="40%" align="left"
	cellspacing="2">
<br><br><br><br><br>
	<tr>
		<td colspan=2>
		<center><font size=6><b>EDIT PROFILE</b></font></center>
		</td>
	</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td>USERNAME</td>
		<td><?php  print $db['username'];    ?></td>
	</tr>
	<tr>
		<td>PASSWORD</td>
		<td><input type="password" name="password" id="password" size="30"></td>
	</tr>
	<tr>
		<td>NEW PASSWORD</td>
		<td><input type="password" name="npassword" id="npassword" size="30"></td>
	</tr>
	<tr>
		<td>CONFIRM NEW PASSWORD</td>
		<td><input type="password" name="cpassword" id="cpassword" size="30"></td>
	</tr>
	<tr>
		<td>FIRST NAME</td>
		<td><?php print $db['firstname'];    ?></td>
	</tr>

	<tr>
		<td>LAST NAME</td>
		<td><?php   print $db['lastname'];    ?></td>
	</tr>
	<tr>
		<td>ADDRESS</td>
		<td><input type="text" name="address" id="address" value="<?php print $db['address'];    ?>"size="30"></td>
	</tr>


	<tr>
		<td>SEX</td>
		<td><?php   print $db['sex'];    ?></td>
	</tr>

	<tr>
		<td>AGE</td>
		<td><?php   print $db['age'];    ?></td>
	</tr>
	
	<tr>
		<td>UNIVERSITY</td>
		<td><?php  print $db['university'];    ?></td>
	</tr>

	<tr>
		<td>BRANCH</td>
		<td><?php   print $db['branch'];    ?></td>
	</tr>

	
	<tr>
		<td>EMAIL ID</td>
		<td><input type="text" name="emailid" id="emailid" value="<?php   print $db['emailid'];    ?>" size="30"></td>
	</tr>


	<tr>
		<td>MOBILE NO</td>
		<td><input type="text" name="mobileno" id="mobileno" value="<?php    print $db['mobileno'];    ?>" size="30"></td>
	</tr>
	<tr>
	      <td><input type="reset"></td>
		<td colspan="2"><input type="submit" value="Apply" name="apply"><input type="hidden" name="editr" id="editr" value="<?php print $u; ?>" size="30"></td>
	</tr>
</table>

</form>
<?php
}


if(isset($_POST['viewupload']))
{
$u=$_POST['manager'];
?>
<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form>
<br><br><pre style="font-size:20px;color:white;"><b>UPLOADED FILES ARE:</b></pre><?php
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql3="select * from login where username='".$u."'";
$result3=mysql_query($sql3);
$db3=mysql_fetch_assoc($result3);

$sql="select * from files where username='".$u."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
?>

<table id="customers"> 
 <tr> <th>FILENAME</th> <th>VIEW/DELETE FILE</th></tr>
<?php
while($db['filename']!=null)
{
?>
<tr><td><?php
print ucfirst($db['filename']);
?>
</td>
<td>

<form class="horizontal" action="userfileview.php" method="post" name="v" >
<input type="submit" name="v" id="v" value="  View  "size="30">
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $u; ?>" size="30">
</form>

<form class="horizontal" action="userfiledelete.php" method="post" name="user" >
<input type="submit" name="delete" id="delete" value="Delete"size="30">
<input type="hidden" name="delete" id="delete" value="<?php
print $db['filename'];
?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $db['username']; ?>" size="30">
<input type="hidden" name="password" id="password" value="<?php print $db3['password']; ?>" size="30">
</form>
</td>
</tr>
<?php
$db=mysql_fetch_assoc($result);
if($db['filename']!=null)
{
?>
<tr  class="alt">
<td><?php
print ucfirst($db['filename']);
?>
</td>
<td>

<form class="horizontal" action="userfileview.php" method="post" name="v" >
<input type="submit" name="v" id="v" value="  View  "size="30">
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="30">
</form>

<form class="horizontal" action="userfiledelete.php" method="post" name="user" >
<input type="submit" name="delete" id="delete" value="Delete"size="30">
<input type="hidden" name="delete" id="delete" value="<?php
print $db['filename'];
?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $db['username']; ?>" size="30">
<input type="hidden" name="password" id="password" value="<?php print $db3['password']; ?>" size="30">
</form>
</td>
</tr>
<?php
$db=mysql_fetch_assoc($result);
}
}  
}





}
?>



</body>
</html>