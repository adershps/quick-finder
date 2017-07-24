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




if(isset($_POST['fd']))
{
$u=$_POST['manager'];
?>
<br><br>
<pre style="font-size:50px;color:red;"><b>ENTER FILENAME FOR DELETE</b></pre>
<br><br><br>
<form action="filedeleted.php" method="post" name="user" >
    
    <table cellpadding="2" width="40%" align="left"
	cellspacing="2">


	<tr>
		<td>ENTER FILENAME</td>
		<td><input type="text" name="delete" id="delete"  size="30"></td>
		<input type="hidden" name="manager" id="manager" value="<?php print $u; ?>" size="30">
	</tr>
</table>

</form>
<?php

}
?>
</body>
</html>