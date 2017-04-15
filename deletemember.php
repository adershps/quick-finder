<html>
<title>
ACCOUNT
</title>
<body background="background4.jpg">
<?php
error_reporting(0);

?>
<br><br><br><br><br><br><br><br><br><br>
<?php

$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
if(isset($_POST['user']))
{
$u=$_POST['user1'];
}
$sql="select * from student where student.username='".$u."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
if($data['username']==$u)
{


$l=$data['photo'];
$e="uploadimg/".$l;

unlink($e);
$query="DELETE FROM `project1`.`student` WHERE `student`.`username`='".$u."'";
$rlt=mysql_query($query);
$data=mysql_fetch_assoc($rlt);

}


$sql="select * from login where login.username='".$u."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
if($data['username']==$u)
{

$query="DELETE FROM `project1`.`login` WHERE `login`.`username`='".$u."'";
$rlt=mysql_query($query);
$data=mysql_fetch_assoc($rlt);
?><br><br><br><br><br><br><pre style="font-family:stencil std;font-size:50px;color:darkred;"><b>                USER DATA IS DELETED</b></pre>


<form action="admin.php" method="post" >
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" name="continue" id="continue" value="                  HOME                    "size="30"></td>
	</tr>
	</tr>
	<tr><td><input type="hidden" name="password" value="789" size="30"></td>
	<tr
</form>	


<?php

}
else
{
?><br><br><br><br><br><br><pre style="font-family:stencil std;font-size:50px;color:darkred;"><b>                   INVALID USERNAME</b></pre>
<form action="admin.php" method="post" >
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" name="continue" id="continue" value="                  HOME                    "size="30"></td>
	</tr>
	<tr><td><input type="hidden" name="password" value="789" size="30"></td>
	<tr>
</form>
<?php
}
mysql_close($db_handle);
}
?>
</body>
</html>
