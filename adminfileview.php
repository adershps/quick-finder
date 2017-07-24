<html>
<title>
ACCOUNT
</title>
<head> 
<style>
 #customers { font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; width:100%; border-collapse:collapse; } #customers td, #customers th { font-size:1em; border:1px solid #ffffff; padding:3px 7px 2px 7px; } #customers th { font-size:1.1em; text-align:left; padding-top:5px; padding-bottom:4px; background-color:#2f4f4f; color:#ffffff; } #customers tr.alt td { color:#ffffff; background-color:#000000; } #customers tr td { color:#ffffff; background-color:; } 
 </style>
<style>
 .horizontal{width:100px; float:left;}
 </style> 
 </head> 
<body background="background6.jpg">
<form action="admin.php" method="post">
<input type="submit" name="continue" id="continue" value=" HOME "size="30">
</form>
<?php
error_reporting(0);
if(isset($_POST['v']))
{

$f=$_POST['f'];
}

?>


<iframe src="reader/web/viewer.html?file=upload/<?php print $f;?>"
name="targetframe"
allowTransparency="true"
scrolling="no" width="100%" height="650"; frameborder="0" >
    </iframe>
</body>
</html>