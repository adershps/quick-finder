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
<input type="hidden" name="password" id="password" value="789"size="30">
</form>
<?php
error_reporting(0);

?>


<?php

$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
if(isset($_POST['ur']))
{
$u=$_POST['ur1'];

$sql="select * from registration where registration.username='".$u."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
$sql0="select * from login where login.username='".$u."'";
$result0=mysql_query($sql0);
$data0=mysql_fetch_assoc($result0);
if($data['username']==$u)
{
?>

<table id="customers"> 
 <tr> <th></th> <th>USED DETAILS</th></tr>
<?php
print "<tr><td>USERNAME</td><td>".$data['username']."</td></tr>";
print "<tr><td>PASSWORD</td><td>".$data0['password']."</td></tr>";
print "<tr><td>FIRSTNAME</td><td>".$data['firstname']."</td></tr>";
print "<tr><td>LASTNAME</td><td>".$data['lastname']."</td></tr>";
print "<tr><td>ADDRESS</td><td>".$data['address']."</td></tr>";
print "<tr><td>SEX</td><td>".$data['sex']."</td></tr>";
print "<tr><td>AGE</td><td>".$data['age']."</td></tr>";
print "<tr><td>UNIVERSITY</td><td>".$data['university']."</td></tr>";
print "<tr><td>BRANCH</td><td>".$data['branch']."</td></tr>";
print "<tr><td>EMAIL ID</td><td>".$data['emailid']."</td></tr>";
print "<tr><td>MOBILE NO</td><td>".$data['mobileno']."</td></tr>";

}
}
else
{
if(isset($_POST['user']))
{
$u=$_POST['user1'];

$sql="select * from student where student.username='".$u."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
$sql0="select * from login where login.username='".$u."'";
$result0=mysql_query($sql0);
$data0=mysql_fetch_assoc($result0);
if($data['username']==$u)
{
?>
<pre style="font-family:Victorian LET;font-size:50px;color:white;"><b><?php print ucfirst($data['firstname']);print " ".ucfirst($data['lastname']);?></b></pre>
<?php
$f=$data['photo'];
$e="uploadimg/".$f;
  ?>
  <img src="<?php print $e;?>" width="250" height="250">

<table id="customers"> 
 <tr> <th></th> <th>USED DETAILS</th></tr>
<?php
print "<tr><td>USERNAME</td><td>".$data['username']."</td></tr>";
print "<tr><td>PASSWORD</td><td>".$data0['password']."</td></tr>";
print "<tr><td>FIRSTNAME</td><td>".$data['firstname']."</td></tr>";
print "<tr><td>LASTNAME</td><td>".$data['lastname']."</td></tr>";
print "<tr><td>ADDRESS</td><td>".$data['address']."</td></tr>";
print "<tr><td>SEX</td><td>".$data['sex']."</td></tr>";
print "<tr><td>AGE</td><td>".$data['age']."</td></tr>";
print "<tr><td>UNIVERSITY</td><td>".$data['university']."</td></tr>";
print "<tr><td>BRANCH</td><td>".$data['branch']."</td></tr>";
print "<tr><td>EMAIL ID</td><td>".$data['emailid']."</td></tr>";
print "<tr><td>MOBILE NO</td><td>".$data['mobileno']."</td></tr>";
$sql="select * from files where files.username='".$u."'";
$result=mysql_query($sql);
$dat=mysql_fetch_assoc($result);
?>

<table id="customers"> 
 <tr> <th>UPLOADED FILES</th>  <th>UNIVERSITY</th>   <th>SUBJECT</th>  <th>BRANCH</th>  <th>SEMESTER</th>  <th>YEAR</th> <th>VIEW/DELETE FILE</th></tr>
<?php
while($dat['filename']!=null)
{
?>
<tr><td><?php
print $dat['filename'];?></td> 
<td><?php
print $dat['university'];?></td> 
<td><?php
print $dat['subject'];?></td> 
<td><?php
print $dat['branch'];?></td> 
<td><?php
print $dat['semester'];?></td> 
<td><?php
print $dat['year'];?></td>
<td>

<form class="horizontal" action="adminfileview.php" method="post" name="v" >
<input type="submit" name="v" id="v" value="  View  "size="30">
<input type="hidden" name="f" id="f" value="<?php print $dat['filename']; ?>" size="30">
</form>

<form class="horizontal" action="warning.php" method="post" name="user" >
<input type="submit" name="delete" id="delete" value="Delete"size="30">
<input type="hidden" name="delete" id="delete" value="<?php
print $dat['filename'];
?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $db['username']; ?>" size="30">
</form>
</td> 
<?php
$dat=mysql_fetch_assoc($result);
}
}
}
else
{
?>
<br><br><br><br><br><br><pre style="font-family:stencil std;font-size:50px;color:darkred;"><b>                   INVALID USERNAME</b></pre>
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
}
mysql_close($db_handle);
}
?>
</body>
</html>
