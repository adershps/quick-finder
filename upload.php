<html>
<title>
ACCOUNT
</title>
<head>
<script type="text/javascript" src="upload.js"></script>
</head>
<body background="background1.jpg">
<?php
error_reporting(0);

include('class.pdf2text.php');
$a=new PDF2Text();

if(isset($_POST['manage']))
{
$u=$_POST['manager'];
}

?>	
<br>

<?php

if((!empty($_FILES["uploaded_file"])) && ($_FILES['uploaded_file']['error'] == 0)) {
  $filename = basename($_FILES['uploaded_file']['name']);
  $ext = substr($filename, strrpos($filename, '.') + 1);
  if (($ext == "pdf") && ($_FILES["uploaded_file"]["type"] == "application/pdf") && 
	($_FILES["uploaded_file"]["size"] < 1000000)) {
      $newname = dirname(__FILE__).'/reader/web/upload/'.$filename;
      if (!file_exists($newname)) {
        if ((move_uploaded_file($_FILES['uploaded_file']['tmp_name'],$newname))) {
           ?>
			<pre style="font-family:stencil std;font-size:30px;color:green;"><b>File is successfully uploaded<br>Please submit the question paper details</b></pre>	
			<?php	
				
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$e="reader/web/upload/".$filename;
$a->setFilename($e);
$a->decodePDF();
$p=strtolower($a->output());
$ds=explode(" ",$p);
for($k=0;$k<600;++$k)
{
$words[$k]=$ds[$k];
}
print $words[675];
$keywords=serialize($words);
$sql="insert into files(filename,location,username,keywords) values('".strtolower($_FILES['uploaded_file']['name'])."','".$newname."','".$u."','".$keywords."')";
$result=mysql_query($sql);




mysql_close($db_handle);
}			
?>
		
		
		
		<form action="fileuploaded.php" method="post" name="upload" onsubmit="return(validate());">
    
    <table cellpadding="2" width="40%" align="left"
	cellspacing="2">
<br><br><br><br><br>
	<tr>
		<td colspan=2>
		<center><font size=5><b>ENTER DETAILS OF QUESTIONPAPER</b></font></center>
		</td>
	</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>

	<tr>
		<td>SUBJECT</td>
		<td><input type="text" name="subject" size="25"></td>
	</tr>
	<tr>
		<td>UNIVERSITY</td>
		<td><select name="university">
			 <option value="-1" selected>select..</option>
			<option value="cusat">CUSAT</option>
			<option value="kerala">KERALA</option>
			<option value="MG">MG</option>
			
		</select></td>
	</tr>

	<tr>
		<td>BRANCH</td>
		<td><select name="branch">
			<option value="-1" selected>select..</option>
			<option value="cse">CSE</option>
			<option value="ec">EC</option>
			<option value="eee">EEE</option>
			
		</select></td>
	</tr>

	
<tr>
		<td>SEMESTER:</td>
		<td><select name="semester">
			<option value="-1" selected>select..</option>
<option value="I&II">I&II</option>
<option value="III">III</option>
<option value="IV">IV</option>
<option value="V">V</option>
<option value="VI">VI</option>
<option value="VII">VII</option>
<option value="VIII">VIII</option>
</select></td></tr>



<tr>
		<td>YEAR:</td>
		<td><select name="year">
			<option value="-1" selected>select..</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
<option value="1999">1999</option>
</select></td></tr>
<tr>
	      <td><input type="reset"></td>
		<td colspan="2"><input type="submit" name="upload" id="upload"value="UPLOAD" /></td>
		<input type="hidden" name="manager" id="manager" value="<?php print $u; ?>" size="30">
		<input type="hidden" name="m" id="m" value="<?php print $_FILES['uploaded_file']['name']; ?>" size="30">
	</tr>
</table>

</form>
<?php				
				
				
				
				
				
				
				} else {
				?> <form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form> <?php
           echo "Error: A problem occurred during file upload!";
        }
      } else {?> <form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form> <?php
         echo "Error: File ".$_FILES["uploaded_file"]["name"]." already exists";
      }
  } else {?> <form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form> <?php
     echo "Error: Only PDF files under 1MB are accepted for upload";
  }
} else {?> <form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form> <?php
 echo "Error: No file uploaded";
}





?>		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		

</body>
</html>