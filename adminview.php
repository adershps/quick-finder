<html>
<title>
ACCOUNT
</title>
<head> 
<style>
 #customers { font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; width:100%; border-collapse:collapse; } #customers td, #customers th { font-size:1em; border:1px solid #ffffff; padding:3px 7px 2px 7px; } #customers th { font-size:1.1em; text-align:left; padding-top:5px; padding-bottom:4px; background-color:#2f4f4f; color:#ffffff; } #customers tr.alt td { color:#ffffff; background-color:#000000; } #customers tr td { color:#ffffff; background-color:; } 
 </style>
<style>
 .horizontal{width:100px; float:left;}
 </style> 
 </head> 
<body background="background6.jpg">
<form action="admin.php" method="post">
<input type="submit" name="continue" id="continue" value=" HOME "size="30">
</form>
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
$sql="select * from student";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);

if(isset($_POST['vu']))
{
?>

<pre style="font-family:stencil std;font-size:50px;color:#ffffff;"><b>                 USER ACCOUNT DETAILS</b></pre>
<table id="customers"> 
 <tr> <th>FULLNAME</th> <th>USERNAME</th> <th>VIEW/DELETE ACCOUNT</th></tr>
<?php

while($db['username']!=null)
{
?>
<tr><td><?php
print ucfirst($db['firstname'])." ".ucfirst($db['lastname']);
?>
</td>
<td><?php
print $db['username'];
?>
</td><td>

<form class="horizontal" action="memberview.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="  View  "size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>

<form class="horizontal" action="warning1.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="Delete"size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>

</td></tr>
<?php
$db=mysql_fetch_assoc($result);
if($db['username']!=null)
{
?>
<tr class="alt"><td><?php
print ucfirst($db['firstname'])." ".ucfirst($db['lastname']);
?>
</td>
<td><?php
print $db['username']."<br>";
?>
</td>
<td>

<form class="horizontal" action="memberview.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="  View  "size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>

<form class="horizontal" action="warning1.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="Delete"size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>

</td
</tr>
<?php
$db=mysql_fetch_assoc($result);
}
}
}






if(isset($_POST['vuv']))
{

?>

<pre style="font-family:stencil std;font-size:50px;color:#ffffff;"><b>                       UPLOADED FILES</b></pre>
<table id="customers"> 
 <tr> <th>FILENAME</th>  <th>UNIVERSITY</th>   <th>SUBJECT</th>  <th>BRANCH</th>  <th>SEMESTER</th>  <th>YEAR</th> <th>VIEW/DELETE FILE</th> <th>UPLOADED USER</th></tr>
<?php


$sql="select * from files";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);

while($db['filename']!=null)
{
?>
<tr><td><?php
print $db['filename'];?></td> 
<td><?php
print $db['university'];?></td> 
<td><?php
print $db['subject'];?></td> 
<td><?php
print $db['branch'];?></td> 
<td><?php
print $db['semester'];?></td> 
<td><?php
print $db['year'];?></td> 
<td>

<form class="horizontal" action="adminfileview.php" method="post" name="v" >
<input type="submit" name="v" id="v" value="  View  "size="30">
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="30">
</form>

<form class="horizontal" action="warning.php" method="post" name="user" >
<input type="submit" name="delete" id="delete" value="Delete"size="30">
<input type="hidden" name="delete" id="delete" value="<?php
print $db['filename'];
?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $db['username']; ?>" size="30">
</form>
</td>
<td><?php
print $db['username'];?>
<form class="horizontal" action="memberview.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="  View  "size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>
</td> 
</tr>
<?php
$db=mysql_fetch_assoc($result);
if($db['filename']!=null)
{
?>
<tr  class="alt"><td><?php
print $db['filename'];?></td> 
<td><?php
print $db['university'];?></td> 
<td><?php
print $db['subject'];?></td> 
<td><?php
print $db['branch'];?></td> 
<td><?php
print $db['semester'];?></td> 
<td><?php
print $db['year'];?></td>
<td>

<form class="horizontal" action="adminfileview.php" method="post" name="v" >
<input type="submit" name="v" id="v" value="  View  "size="30">
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="30">
</form>

<form class="horizontal" action="warning.php" method="post" name="user" >
<input type="submit" name="delete" id="delete" value="Delete"size="30">
<input type="hidden" name="delete" id="delete" value="<?php
print $db['filename'];
?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $db['username']; ?>" size="30">
</form>
</td>
<td><?php
print $db['username'];?>
<form class="horizontal" action="memberview.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="  View  "size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>
</td> 
</tr>
<?php
$db=mysql_fetch_assoc($result);
}
}  

}



mysql_close($db_handle);
}
?>
</body>
</html>