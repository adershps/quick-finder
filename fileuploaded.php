<html>
<title>
ACCOUNT
</title>
<body background="background1.jpg">
<?php
 error_reporting(0);       

if(isset($_POST['upload']))
{
$f=$_POST['m'];
$u=$_POST['manager'];
$db['subject']=strtolower($_POST['subject']);
$db['university']=$_POST['university'];
$db['branch']=$_POST['branch'];
$db['semester']=$_POST['semester'];
$db['year']=$_POST['year'];
}
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{

$sql="update files set subject='".$db['subject']."',university='".$db['university']."',branch='".$db['branch']."',semester='".$db['semester']."',year='".$db['year']."' where files.filename='".$f."'";
$result=mysql_query($sql);



mysql_close($db_handle);
}
?>
<br><br><br><br><br><pre style="font-family:stencil std;font-size:50px;color:green;"><b>                     FILE IS UPLOADED</b></pre>
<form action="account.php" method="post" >
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" name="login" id="login" value="Click here to go back to your account"size="30"></td>
	</tr>
	<tr>
		<td><input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30"></td>
	</tr>
	
	<tr>
		<td><input type="hidden" name="password" id="password" value="" size="30"></td>
	</tr>
</form>	

	
	
		

</body>
</html>