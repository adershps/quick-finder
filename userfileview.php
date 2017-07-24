<html>
<title>
EDIT
</title>
<head>
<script type="text/javascript" src="Validate.js"></script>

<style>
 #customers { font-family:"Trebuchet MS", Arial, Helvetica, sans-serif; width:100%; border-collapse:collapse; } #customers td, #customers th { font-size:1em; border:1px solid white; padding:3px 7px 2px 7px; } #customers th { font-size:1.1em; text-align:left; padding-top:5px; padding-bottom:4px; background-color:; color:#ffffff; } #customers tr.alt td { color:#000000; background-color:; } 
 </style>
<style>
 .horizontal{width:100px; float:left;}
 </style> 
 
</head>
<body background="background5.jpg">
<?php

error_reporting(0);
if(isset($_POST['v']))
{
$u=$_POST['manager'];
$f=$_POST['f'];
}

?>
<form action="account.php" method="post">
<input type="submit" name="login" id="login" value=" HOME "size="30">
<input type="hidden" name="username" id="username" value="<?php print $u; ?>"size="30">
</form>

<iframe src="reader/web/viewer.html?file=upload/<?php print $f;?>"
name="targetframe"
allowTransparency="true"
scrolling="no" width="100%" height="650"; frameborder="0" >
    </iframe>







</body>
</html>