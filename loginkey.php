<?php
session_start();
?>
<!DOCTYPE html>
<?php
error_reporting(0);
if(isset($_POST['login']))
{
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
}



$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql="select * from login where username='".$_SESSION['username']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$sql1="select * from admin";
$result1=mysql_query($sql1);
$db1=mysql_fetch_assoc($result1);

if($_SESSION['adminpassword']==$db1['password'])
{
print $_SESSION['adminpassword'];
print $db1['password'];
header("location:admin.php");
}

if($_SESSION['username']=="admin" AND $_SESSION['password']=="admin")
{
$_SESSION['i']=3;
header("location:account.php");
}
else
{
if($db['username']==null)
{
$_SESSION['iu']=1;
header("location:login.php");
}
else
{
if($db['password']==$_SESSION['password'])
{
header("location:account.php");
}
else
{
$_SESSION['ip']=2;
header("location:login.php");
}
}
}

}
?>
