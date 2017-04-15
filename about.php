<!DOCTYPE html>
<html>
<title>
ABOUT
</title>
<head>
<script type="text/javascript" src="advancedsearch.js"></script>
<style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#FFFFFF; background-color:#98bf21; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:#7A991A; }
 </style>
</head>
<body background="background1.jpg">
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
<p style="font-family:MS Serif;font-size:25px;color:green;">
<b><br><br>This is a simple search engine for B.Tech question papers.<br>
Only the registered users can upload the question papers in PDF form.</b><br>
</p>


</body>
</html>