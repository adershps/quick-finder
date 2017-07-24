<?php
session_start();
?>
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
<?php
error_reporting(0);

$z=0;
$o=1;


$item=null;
if(isset($_POST['search']))
{
$item=$_POST['item'];

$n=$_POST['n'];
}
else
{
$item=explode(" ",$_SESSION['item']);
$n=$_SESSION['n'];
session_unset();
session_destroy();
}
$page="searchings.php";

if(isset($_POST['prev']))
{
$item=$_POST['item'];
$n=$_POST['n'];
$c=$_POST['p'];
$n=$n-(3+$c);
if($n<0)
{
$n=0;
}
}

$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{
$sql="select * from files";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
$g=0;
$h=0;


while($db['filename']!=null&&$z<3)
{
$i=0;
$words=unserialize($db['keywords']);

while($i<count($words) and $h<2)
{


if($words[$i]==$item[$h] and $h<2 and $db['filename']!=null and $z<3)
{
print "Adersh";
++$h;
}
if($h>=2 and $db['filename']!=null and $z<3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view1.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="item" id="item" value="<?php print $item; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
<input type="hidden" name="p" id="p" value="<?php print $page; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;
}
++$i;
}
	
}



if($db['filename']==null)
{
$o=null;
}
?>
<br><br>
<?php
$n=$n+$z;
?>
<form action="searching.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php

 if(($n-$z)>1){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }
 ?>
 <li><pre>        </pre></li>
<?php
 if($o!=null){?><li><input type="submit" name="search" id="search" value="Next"size="30"></li><?php }else{?>
 <li><pre>        </pre></li>
<?php
if($n<=0)
{
?><pre style="font-family:stencil std;font-size:50px;color:darkred;"><b>                 No Result is Found!</b></pre><?php
}

}?>
</ul>
<input type="hidden" name="item" id="item" value="<?php print $item; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php

}




?>
</body>
</html>