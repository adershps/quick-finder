<?php
session_start();
?>
<html>
<title>
ADMINISTRATOR
</title>

<body background="background4.jpg">

<?php
error_reporting(0);
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql1="select * from admin";
$result1=mysql_query($sql1);
$db1=mysql_fetch_assoc($result1);
if($_SESSION['adminpassword']==$db1['password'])
{
?>
<br><br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br>
<?php
if(isset($_SESSION['p']))
{
?>
<pre style="font-size:20px;color:darkgreen;"><b>PASSWORD IS CHANGED</b></pre>
<?php
$_SESSION['p']=null;
}
if(isset($_SESSION['ip']))
{
?>
<pre style="font-size:20px;color:darkred;"><b>INVALID PASSWORD</b></pre>
<?php
$_SESSION['ip']=null;
}
if(isset($_SESSION['icp']))
{
?>
<pre style="font-size:20px;color:darkred;"><b>WRONG CONFORM PASSWORD</b></pre>
<?php
$_SESSION['icp']=null;
}
?>
<br><br>
<form action="adminview.php" method="post" name="vu">
<input type="submit" name="vu" id="vu" value="VIEW USERS                     " size="30">
</form>


<form action="adminview.php" method="post" name="vu">
<input type="submit" name="vuv" id="vuv" value="VIEW UPLOADS                " size="30">
</form>


<form action="request.php" method="post" name="vu">
<input type="submit" name="rr" id="rr" value="REGISTRATION REGUEST" size="30">
</form>

<form action="changepw.php" method="post" name="vu">
<input type="submit" name="cp" id="cp" value="CHANGE PASSWORD      " size="30">
</form>

<form action="logout.php">
<input type="submit" value="LOGOUT                            "size="30">
</form>	

<?php
}
else
{
$_SESSION['ip']=2;
header("location:login.php");
}
}
?>
</body>
</html>