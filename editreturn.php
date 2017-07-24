<html>
<title>
EDIT RETURN
</title>

<body style="background-color:lightblue;">
<?php
error_reporting(0);

if(isset($_POST['apply']))
{

$db['password']=$_POST['password'];
$db['npassword']=$_POST['npassword'];
$db['cpassword']=$_POST['cpassword'];
$db['address']=$_POST['address'];
$db['emailid']=$_POST['emailid'];
$db['mobileno']=$_POST['mobileno'];
$u=$_POST['editr'];
}
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql="UPDATE `project1`.`student` SET `address` = '".$db['address']."' WHERE `student`.`username` = '".$u."'";
$result=mysql_query($sql);
 $sql="UPDATE `project1`.`student` SET `emailid` = '".$db['emailid']."' WHERE `student`.`username` = '".$u."'";
$result=mysql_query($sql);
$sql="UPDATE `project1`.`student` SET `mobileno` = '".$db['mobileno']."' WHERE `student`.`username` = '".$u."'";
$result=mysql_query($sql);
$ql="select * from login where username='".$u."'";
$result=mysql_query($ql);
$data=mysql_fetch_assoc($result);

if($db['password']==$data['password'])
{
if($db['npassword']==$db['cpassword'])
{
$sql="UPDATE `project1`.`login` SET `password` = '".$db['cpassword']."' WHERE `login`.`username` = '".$u."'";
$result=mysql_query($sql);
print "Note:PASSWORD IS CHANGED";

}
else
{print "Note:PASSWORD IS NOT CHANGED, BECAUSE PASSWORD CONFORMATION IS WRONG!";}
}
mysql_close($db_handle);
}

?>
<br><br><br><br><br><br><br><br>
<pre style="font-size:40px;color:green;"><b>              YOUR ACCOUNT IS UPDATED</b></pre>

<form action="account.php" method="post" >
    
    <table cellpadding="6" width="30%" bgcolor="lightblue" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" name="login" id="login" value="Click here to go back to your account"size="30"></td>
	</tr>
	<tr>
		<td><input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30"></td>
	</tr>
	
	<tr>
		<td><input type="hidden" name="password" id="password" value="" size="30"></td>
	</tr>
</form>	



</body>
</html>