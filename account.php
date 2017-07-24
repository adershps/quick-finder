<?php
session_start();
?>
<html>
<title>
ACCOUNT
</title>
<head>
<style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#000000; background-color:#a9a9a9; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:red; }
 </style>
</head>


<?php

error_reporting(0);

if($_SESSION['i']==3)
{
?>
<body background="background2.jpg">
<ul>
 <li><a href="mainpage.php">HOME</a></li>
 </ul>
 </ul>
 <?php
session_unset();
session_destroy();
 ?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="adminloginkey.php" method="post">
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
	<tr>
		<td></td><td><pre style="font-size:25px;color:white;"><b>PASSWORD:</b></pre><input type="password" name="adminpassword" id="adminpassword" size="30">
		<input type="submit" name="login" id="login" value=" CONTINUE "size="30"></td>
	    <td></td>
	</tr>
    <tr>
		
	</tr>
</form>	
<?php
}
else
{
?>
<body background="background5.jpg">
<?php
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$student="select * from student where student.username='".$_SESSION['username']."'";
$query=mysql_query($student);
$data=mysql_fetch_assoc($query);
if($data['username']!=null)
{
?>
<pre style="font-family:Victorian LET;font-size:50px;color:white;"><b>Hello <?php print ucfirst($data['firstname']).",<br>";?></b></pre>

	

<?php
if($data['photo']=="default.jpg")
{
$f=$data['photo'];
$e="uploadimg/".$f;
?>
<img src="<?php print $e;?>" width="250" height="250">
<br>
<form enctype="multipart/form-data" action="uploadimg.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <pre style="font-size:20px;color:darkred;"><b>Upload profile picture: </b></pre><input name="uploaded_file" type="file" />
    <input type="submit" name="manage" id="manage" value="Upload" />
  </form>
  <br>
  <?php
  }
  else
  {
$f=$data['photo'];
$e="uploadimg/".$f;
  ?>
  <img src="<?php print $e;?>" width="250" height="250">
  <form enctype="multipart/form-data" action="uploadimg.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <pre style="font-size:20px;color:white;"><b>Update profile picture: </b></pre><input name="uploaded_file" type="file" />
    <input type="submit" name="manage" id="manage" value="Upload" />
	<input type="hidden" name="manager" id="manager" value="<?php print $_SESSION['username']; ?>" size="30">
  </form>
  <br>
  <?php
  }
  ?>
  <br><br><br>
<form action="edit.php" method="post" name="edit">
<input type="submit" name="manage" id="manage" value="VIEW / EDIT  PROFILE" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $_SESSION['username']; ?>" size="30">
</form>

<form action="edit.php" method="post" name="edit">
<input type="submit" name="viewupload" id="viewupload" value="VIEW  UPLOADS         " size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $_SESSION['username']; ?>" size="30">
</form>
<form action="logout.php">
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" value="LOG OUT"size="30"></td>
	</tr>
</form>	
<form enctype="multipart/form-data" action="upload.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
    <pre style="font-size:20px;color:white;"><b>Choose a file to upload: </b></pre><input name="uploaded_file" type="file" />
    <input type="submit" name="manage" id="manage" value="Upload" />
	<input type="hidden" name="manager" id="manager" value="<?php print $_SESSION['username']; ?>" size="30">
  </form>

<?php

}
else
{
$sql2="select * from registration where username='".$_SESSION['username']."'";

$result2=mysql_query($sql2);
$db2=mysql_fetch_assoc($result2);
if($db2['username']!=null)
{
?>
<br><br><br><br><br>

<pre style="font-family:stencil std;font-size:40px;color:darkred;"><b>Hello <?php print ucfirst($db2['firstname']).",<br>";?>YOUR REGISTRATION IS UNDER PROCESSING</b></pre>
<form action="logout.php">
    
    <table cellpadding="6" width="30%"  align="center"
	cellspacing="10">
    <tr>
		<td></td><td><input type="submit" name="return" id="return" value="LOGOUT"size="30"></td>
	</tr>
</form>	
	

<?php
}
else
{
$_SESSION['iu']=1;
header("location:admin.php");
}
}






mysql_close($db_handle);
}
}
?>

</body>
</html>