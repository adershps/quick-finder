<?php
session_start();
?>
<!DOCTYPE html>
<?php
error_reporting(0);
if(isset($_POST['login']))
{
$_SESSION['adminpassword']=$_POST['adminpassword'];
}
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
header("location:admin.php");
}
else
{
$_SESSION['ip']=2;
header("location:login.php");
}
}
?>
