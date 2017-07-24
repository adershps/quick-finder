<!DOCTYPE html>
<html>
<title>
QUICK FINDER
</title>
<head>
<style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#FFFFFF; background-color:#98bf21; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:#7A991A; }
 </style>
</head>
<body background="background.jpg">
 <?php
 $n=0;
 ?>
<pre style="font-size:40px;"><b>              BTECH QUESTION PAPERS</b></pre>
<pre>                                      <img src="dog.gif" width="" height=""></pre>
<br><br><br><br>



<form method="post" ACTION="search.php"><pre><ul>
 <li>                                          <input type="text" name="item" size="75"><input type="submit" name="search" value="SEARCH"></pre></form></li>  
 <input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
 
 </ul>

<form action="advancedsearch.php">
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td><input type="submit" name="advanced" id="advanced" value=" ADVANCED   SEARCH "size="30"></td>
	</tr>
</form>

<form action="login.php">
    
    <table cellpadding="6" width="30%" align="center"
	cellspacing="10">
    <tr>
		<td></td><td><input type="submit" name="login" id="login" value="LOGIN"size="30"></td>
	</tr>
</form>








</body>
</html>