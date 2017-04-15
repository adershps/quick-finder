<?php
session_start();
?>
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
<form method="post" ACTION="search.php"><pre><input type="text" name="item" size="30"><input type="submit" name="search" value="SEARCH"></pre></form>

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
$db['item']=$_POST['item'];
$n=$_POST['n'];
$page=$_POST['p'];
}

?>


<form action="back.php" method="POST">
<input type="submit" name="search" id="search" value="Back"size="30">
<input type="hidden" name="item" id="item" value="<?php print $db['item']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
<input type="hidden" name="p" id="p" value="<?php print $page; ?>" size="5">
</form>






<iframe src="reader/web/viewer.html?file=upload/<?php print $f;?>"
name="targetframe"
allowTransparency="true"
scrolling="no" width="100%" height="650"; frameborder="0" >
    </iframe>

</body>
</html>