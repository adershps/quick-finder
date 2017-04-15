<?php
session_start();

if(isset($_POST['search']))
{
$_SESSION['item']=$_POST['item'];
$_SESSION['n']=$_POST['n'];
}

$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{

$sql="select * from files where files.subject='".$_SESSION['item']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
if($db['filename']!=null)
{
header("location:searchview.php");
}
else
{
$sql="select * from files where files.university='".$_SESSION['item']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
if($db['university']!=null)
{
header("location:searchuniversity.php");
}
else
{
$sql="select * from files where files.year='".$_SESSION['item']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
if($db['year']!=null)
{
header("location:searchyear.php");
}
else
{
$sql="select * from files where files.branch='".$_SESSION['item']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
if($db['branch']!=null)
{
header("location:searchbranch.php");
}
else
{
$_SESSION['n']=0;
$s=explode(" ",$_SESSION['item']);
if(count($s)==1)
{
header("location:searching.php");   //this page is used to search inside a pdf for one word.
}
else
{
header("location:searchings.php");   //this page is used to search inside a pdf for a string.
}
}


}
}
}
}
?>