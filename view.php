<!DOCTYPE html>
<html>
<title>
VIEW
</title>
<head>
<script type="text/javascript" src="advancedsearch.js"></script>
<style> 
 ul { list-style-type:none; margin:0; padding:0; overflow:hidden; } li { float:left; } a:link,a:visited { display:block; width:120px; font-weight:bold; color:#FFFFFF; background-color:#98bf21; text-align:center; padding:4px; text-decoration:none; text-transform:uppercase; } a:hover,a:active { background-color:#7A991A; }
 </style>
</head>

<body background="background1.jpg">
<img src="qf.jpg">
<form method="post" ACTION="searchview.php"><pre><input type="text" name="item" size="30"><input type="submit" name="search" value="SEARCH"></pre></form>

 <ul>
 <li><a href="mainpage.php">HOME</a></li>
 <li><a href="login.php">LOGIN</a></li>
 <li><a href="register.php">SIGNUP</a></li>
 <li><a href="">CONTACT</a></li>
 <li><a href="">ABOUT</a></li> 
 </ul>
 <br>
<?php
error_reporting(0);
$f=0;
if(isset($_POST['v']))
{
$f=$_POST['f'];
$db['university']=$_POST['university'];
$db['branch']=$_POST['branch'];
$db['semester']=$_POST['semester'];
$db['year']=$_POST['year'];
$n=$_POST['n'];
}

$s['university']=$db['university'];
$s['branch']=$db['branch'];
$s['semester']=$db['semester'];
$s['year']=$db['year'];

?>


<form action="searchresult.php" method="POST">
<input type="submit" name="advancedsearch" id="advancedsearch" value="Back"size="30">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>






<iframe src="reader/web/viewer.html?file=upload/<?php print $f;?>"
name="targetframe"
allowTransparency="true"
scrolling="no" width="100%" height="650"; frameborder="0" >
    </iframe>

</body>
</html>