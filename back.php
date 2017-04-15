<?php
session_start();

if(isset($_POST['search']))
{
$_SESSION['item']=$_POST['item'];
$_SESSION['n']=$_POST['n'];
$page=$_POST['p'];
print $page;
}

if($page=="searching.php")
header("location:searching.php");
else
{
if($page=="searchview.php")
header("location:searchview.php");
else
{
if($page=="searchbranch.php")
header("location:searchbranch.php");
else
{
if($page=="searchuniversity.php")
header("location:searchuniversity.php");
else
{
if($page=="searchyear.php")
header("location:searchyear.php");
else
{
if($page=="searchings.php")
header("location:searchings.php");
}
}
}
}
}










?>
