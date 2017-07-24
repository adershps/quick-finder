<?php
session_start();
?>
<html>
<title>
ACCOUNT
</title>
<body background="background5.jpg">
<?php
error_reporting(0);

?>	
<br>

<?php

if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  $filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "jpg") && ($_FILES["uploaded_file"]["type"] == "image/jpeg") && 
	($_FILES["uploaded_file"]["size"] < 350000)) {
      $newname = dirname(__FILE__).'/uploadimg/'.$filename;
      if (!file_exists($newname)) {
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           echo "Note: PROFILE PICTURE IS UPLOADED SUCCESSFULLY";
				
				
				
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{

$query="select * FROM `project1`.`student` WHERE `student`.`username`='".$_SESSION['username']."'";
$rlt=mysql_query($query);
$db=mysql_fetch_assoc($rlt);
$f=$db['photo'];
$e="uploadimg/".$f;
if($f!="default.jpg")
{
unlink($e);
}
$sql="UPDATE `project1`.`student` SET `photo` = '".$_FILES['uploaded_file']['name']."' WHERE `student`.`username` = '".$_SESSION['username']."'";
$result=mysql_query($sql);
print $db['photo'];
header("location:account.php");


mysql_close($db_handle);
}							
				} else {
           echo "Error: A problem occurred during file upload!";
		   ?>	<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
</form>	<?php
		
		
        }
      } else {
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
		 		   ?>	<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
</form>	<?php
      }
  } else {
     echo "Error: Only JPG files under 350Kb are accepted for upload";
	 		   ?>	<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
</form>	<?php
  }
} else {
 echo "Error: No file uploaded";
 		   ?>	<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
</form>	<?php
}
?>		
</body>
</html>