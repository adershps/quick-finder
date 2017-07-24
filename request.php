<html>
<title>
ADMINISTRATOR
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

<pre style="font-family:stencil std;font-size:50px;color:#ffffff;"><b>                REGISTRATION REQUEST</b></pre>
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
if(isset($_POST['a']))
{
$u=$_POST['a1'];

$sql="select * from registration where registration.username='".$u."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
$sql1="select * from student";
$result1=mysql_query($sql1);
$db=mysql_fetch_assoc($result1);
if($data['username']!=null)
{
if($data['username']==$u)
{
$db['username']=$data['username'];
$db['firstname']=$data['firstname'];
$db['lastname']=$data['lastname'];
$db['address']=$data['address'];
$db['sex']=$data['sex'];
$db['age']=$data['age'];
$db['university']=$data['university'];
$db['branch']=$data['branch'];
$db['emailid']=$data['emailid'];
$db['mobileno']=$data['mobileno'];
$db['photo']="default.jpg";
$sql2="insert into student(username,firstname,lastname,address,sex,age,university,branch,emailid,mobileno,photo) values('".$db['username']."','".$db['firstname']."','".$db['lastname']."','".$db['address']."','".$db['sex']."','".$db['age']."','".$db['university']."','".$db['branch']."','".$db['emailid']."','".$db['mobileno']."','".$db['photo']."')";
$result2=mysql_query($sql2);
$query="DELETE FROM `project1`.`registration` WHERE `registration`.`username`='".$u."'";
$rlt=mysql_query($query);
$data=mysql_fetch_assoc($rlt);

}
}

mysql_close($db_handle);
}
if(isset($_POST['user']))
{
$u=$_POST['user1'];

$sql="select * from registration where registration.username='".$u."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
if($data['username']==$u)
{

$query="DELETE FROM `project1`.`registration` WHERE `registration`.`username`='".$u."'";
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


}

mysql_close($db_handle);
}
}





















$c=0;
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql="select * from registration";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
if($db['username']==null)
{
?><br><br><pre style="font-family:stencil std;font-size:50px;color:gray;"><b>                  NO REQUEST IS FOUND</b></pre><?php
}
else
{
?>
 <table id="customers"> 
 <tr> <th>FULLNAME</th> <th>USERNAME</th> <th>ACCEPT/DELETE REQUEST</th></tr>
 <?php

while($db['username']!=null)
{
++$c;
?>
<tr><td><?php
print ucfirst($db['firstname'])." ".ucfirst($db['lastname']);
?>
</td>
<td><?php
print $db['username']."<br>";
?>
</td><td>

<form class="horizontal" action="memberview.php" method="post" name="user" >
<input type="submit" name="ur" id="ur" value="  View  "size="30">
<input type="hidden" name="ur1" id="ur1" value="<?php
print $db['username'];
?>" size="30">
</form>

<form class="horizontal" action="request.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="Delete"size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>

<form class="horizontal" action="request.php" method="post" name="a" >
<input type="submit" name="a" id="a" value="Accept"size="30">
<input type="hidden" name="a1" id="a1" value="<?php
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
<input type="submit" name="ur" id="ur" value="  View  "size="30">
<input type="hidden" name="ur1" id="ur1" value="<?php
print $db['username'];
?>" size="30">
</form>

<form class="horizontal" action="request.php" method="post" name="user" >
<input type="submit" name="user" id="user" value="Delete"size="30">
<input type="hidden" name="user1" id="user1" value="<?php
print $db['username'];
?>" size="30">
</form>

<form class="horizontal" action="request.php" method="post" name="a" >
<input type="submit" name="a" id="a" value="Accept"size="30">
<input type="hidden" name="a1" id="a1" value="<?php
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
}
?>

</body>
</html>