<html>
<title>
REGISTRATION
</title>
<head>
<script type="text/javascript" src="Validate.js"></script>
<style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#FFFFFF; background-color:#98bf21; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:#7A991A; }
 </style>
</head>
<body background="background1.jpg">
<ul>
 <li><a href="mainpage.php">HOME</a></li> 
 </ul>
<form action="return.php" method="post" name="StudentRegistration" onsubmit="return(validate());">
    
    <table cellpadding="2" width="40%" align="left"
	cellspacing="2">
<br><br><br>
	<tr>
		<td colspan=2>
		<center><font size=6><b>REGISTRATION FORM</b></font></center>
		</td>
	</tr>
<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
	<tr>
		<td><b>USERNAME</b></td>
		<td><input type="text" name="username" id="username" size="30"></td>
	</tr>
	<tr>
		<td><b>PASSWORD</b></td>
		<td><input type="password" name="password" id="password" size="30"></td>
	</tr>
	<tr>
		<td><b>CONFIRM PASSWORD</b></td>
		<td><input type="password" name="cpassword" id="cpassword" size="30"></td>
	</tr>
	<tr>
		<td><b>FIRST NAME</b></td>
		<td><input type="text" name="firstname" id="firstname" size="30"></td>
	</tr>

	<tr>
		<td><b>LAST NAME</b></td>
		<td><input type="text" name="lastname" id="lastname"
			size="30"></td>
	</tr>
	<tr>
		<td><b>ADDRESS</b></td>
		<td><input type="text" name="address" id="address" size="30"></td>
	</tr>


	<tr>
		<td><b>SEX</b></td>
		<td><input type="radio" name="sex" value="male" size="10">Male
		<input type="radio" name="sex" value="female" size="10">Female</td>
	</tr>

	<tr>
		<td><b>AGE</b></td>
		<td><input type="text" name="age" id="age" size="30"></td>
	</tr>
	
	<tr>
		<td><b>UNIVERSITY</b></td>
		<td><select name="university">
			 <option value="-1" selected>select..</option>
			<option value="cusat">CUSAT</option>
			<option value="kerala">KERALA</option>
			<option value="MG">MG</option>
			
		</select></td>
	</tr>

	<tr>
		<td><b>BRANCH</b></td>
		<td><select name="branch">
			<option value="-1" selected>select..</option>
			<option value="cse">CSE</option>
			<option value="ec">EC</option>
			<option value="eee">EEE</option>
			
		</select></td>
	</tr>

	
	<tr>
		<td><b>EMAIL ID</b></td>
		<td><input type="text" name="emailid" id="emailid" size="30"></td>
	</tr>


	<tr>
		<td><b>MOBILE NO</b></td>
		<td><input type="text" name="mobileno" id="mobileno" size="30"></td>
	</tr>
	<tr>
	      <td><input type="reset"></td>
		<td colspan="2"><input type="submit" value="Submit Form" name="submit" /></td>
	</tr>
</table>

</form>
</body>
</html>