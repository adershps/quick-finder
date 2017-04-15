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
<input type="hidden" name="password" id="password" value="789"size="30">
</form>
<?php
if(isset($_POST['delete']))
{
$u=$_POST['manager'];
$f=$_POST['delete'];

}
?>
<br><br><br><br>
<pre style="font-family:stencil std;font-size:50px;color:darkred;"><b>                 ARE YOU SURE?</b></pre>
<form class="horizontal" action="filedeleted.php" method="post" name="user" >
<pre>                                                        <input type="submit" name="delete" id="delete" value=" DELETE "size="30"></pre>
<input type="hidden" name="delete" id="delete" value="<?php
print $f;
?>" size="30">
<input type="hidden" name="manager" id="manager" value="<?php print $u; ?>" size="30">
</form>
</body>
</html>