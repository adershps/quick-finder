<html>
<title>
DELETE
</title>
<head>
<script type="text/javascript" src="Validate.js"></script>
</head>
<body background="background1.jpg">
<?php

error_reporting(0);




if(isset($_POST['delete']))
{
$u=$_POST['manager'];
$f=$_POST['delete'];
$p=$_POST['password'];


$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql="select * from files where files.filename='".$f."'";
$result=mysql_query($sql);
$data=mysql_fetch_assoc($result);
if($data['filename']==$f)
{
$query="select * FROM `project1`.`files` WHERE `files`.`filename`='".$f."'";
$rlt=mysql_query($query);
$data=mysql_fetch_assoc($rlt);
$l=$data['filename'];
$e="reader/web/upload/".$l;
unlink($e);
$query="DELETE FROM `project1`.`files` WHERE `files`.`filename`='".$f."'";
$rlt=mysql_query($query);
$data=mysql_fetch_assoc($rlt);
?>
<br><br><br><br><br><br><br><br>
<pre style="font-family:stencil std;font-size:50px;color:darkred;"><b>                       FILE DELETED</b></pre>
<?php



}








else
{
?>
<br><br>
<pre style="font-size:50px;color:red;"><b>            INVALID FILENAME</b></pre>




<?php
}
}


}
?>
<form action="account.php" method="post" >
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" name="login" id="login" value="                  HOME                    "size="30"></td>
	</tr>
	</tr>
	<tr><td><input type="hidden" name="password" value="<?php print $p; ?>" size="30"></td>
	<td><input type="hidden" name="username" value="<?php print $u; ?>" size="30"></td>
	<tr
</form>




</body>
</html>