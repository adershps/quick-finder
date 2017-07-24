<!DOCTYPE html>
<html>
<title>
ADVANCED-SEARCH
</title>
<head>
<script type="text/javascript" src="advancedsearch.js"></script>

 <style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#FFFFFF; background-color:#98bf21; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:#7A991A; }
 </style>

</head>

<body background="background1.jpg">
 <?php
 $n=0;
 ?>
<img src="qf.jpg">
<form method="post" ACTION="search.php"><pre><input type="text" name="item" size="30"><input type="submit" name="search" value="SEARCH"></pre>
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5"></form>
 <ul>
 <li><a href="mainpage.php">HOME</a></li>
 <li><a href="login.php">LOGIN</a></li>
 <li><a href="register.php">SIGNUP</a></li>
 <li><a href="contact.php">CONTACT</a></li>
 <li><a href="about.php">ABOUT</a></li> 
 </ul>

<form action="searchresult.php" method="post" name="advancedsearch" onsubmit="return(validate());">
    
    <table cellpadding="6" width="60%" align="left"
	cellspacing="10">
<br>
	<tr><td></td><td></td><td></td>
		<td colspan=2>
		<center><font size=8 style="color:darkred" ><b>ADVANCED</b></font><font size=8 ><b>SEARCH</b></font></center>
		</td>
	</tr>
	<tr>
		<td><font size=5 style="color:black" ><b>UNIVERSITY:</b></font></td>
		<td><select name="university">
			 <option value="-1" selected>select..</option>
			<option value="cusat">CUSAT</option>
			<option value="kerala">KERALA</option>
			<option value="MG">MG</option>
			
		</select></td>
	</tr>
	


<tr>
		<td><font size=5 style="color:black" ><b>BRANCH:</b></font></td>
		<td><select name="branch">
			<option value="-1" selected>select..</option>
			<option value="cse">CSE</option>
			<option value="ec">EC</option>
			<option value="eee">EEE</option>
			
		</select></td>
	</tr>
	



<tr>
		<td><font size=5 style="color:black" ><b>SEMESTER:</b></td>
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
		<td><font size=5 style="color:black" ><b>YEAR:</b></td>
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
		<td colspan="2"><input type="submit" name="advancedsearch" value="SEARCH" />
		<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5"></td>
	</tr>
</table>
</form>

</body>
</html>