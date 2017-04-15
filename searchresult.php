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
 <br>
<?php
error_reporting(0);


$z=0;
$o=1;
if(isset($_POST['advancedsearch']))
{
$db['university']=$_POST['university'];
$db['branch']=$_POST['branch'];
$db['semester']=$_POST['semester'];
$db['year']=$_POST['year'];
$n=$_POST['n'];
}

if(isset($_POST['prev']))
{
$db['university']=$_POST['university'];
$db['branch']=$_POST['branch'];
$db['semester']=$_POST['semester'];
$db['year']=$_POST['year'];
$n=$_POST['n'];
$c=$_POST['p'];
$n=$n-(3+$c);
if($n<0)
{
$n=0;
}
}


$s['university']=$db['university'];
$s['branch']=$db['branch'];
$s['semester']=$db['semester'];
$s['year']=$db['year'];




$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{


if($db['semester']!=-1)
{
if($db['branch']!=-1)
{
if($db['year']!=-1)
{
$sql="select * from files where files.university='".$db['university']."' and files.semester='".$db['semester']."' and files.branch='".$db['branch']."' and files.year='".$db['year']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
else
{
$sql="select * from files where files.university='".$db['university']."' and files.semester='".$db['semester']."' and files.branch='".$db['branch']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
}
else
{
if($db['year']!=-1)
{
$sql="select * from files where files.university='".$db['university']."' and files.semester='".$db['semester']."' and files.year='".$db['year']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
else
{
$sql="select * from files where files.university='".$db['university']."' and files.semester='".$db['semester']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
}
}
else
{
if($db['branch']!=-1)
{
if($db['year']!=-1)
{
$sql="select * from files where files.university='".$db['university']."' and files.university='".$db['university']."' and files.year='".$db['year']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
else
{
$sql="select * from files where files.university='".$db['university']."' and files.branch='".$db['branch']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
}

else
{
if($db['year']!=-1)
{
$sql="select * from files where files.university='".$db['university']."' and files.year='".$db['year']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php
}
else
{
$sql="select * from files where files.university='".$db['university']."'";
$result=mysql_query($sql);
$db=mysql_fetch_assoc($result);
$q=$n;
while($q>0)
{
$db=mysql_fetch_assoc($result);
--$q;
}
while($db['filename']!=null&&$z!=3)
{
?>


<p style="text-decoration:none;font-size:27px;color:#4169E1;"><b><?php
print ucfirst($db['subject'])." "."B.Tech ".$db['semester']." semester "." ".strtoupper($db['branch'])." ".$db['year']." ".ucfirst($db['university'])." university"; 
?></b></p>
<form action="view.php" method="post" name="v">
<ul>
<li>
<input type="submit" name="v" id="v" value="VIEW" size="5"></li>
 <li><pre style="text-decoration:none;font-size:15px;color:green;">   <?php
print $db['filename']; 
?></pre></li> 
 </ul>
<input type="hidden" name="f" id="f" value="<?php print $db['filename']; ?>" size="5">
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">
</form>
</td>
<td><?php

?>

<?php
$db=mysql_fetch_assoc($result);
++$z;	
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
<form action="searchresult.php" method="POST">
<ul>
 <li><pre>                                                                                 </pre></li>
<?php if(($n-$z)!=0){?><li><input type="submit" name="prev" id="prev" value="Prev"size="30"></li><?php }?>
 <li><pre>        </pre></li>
<?php if($o!=null){?><li><input type="submit" name="advancedsearch" id="advancedsearch" value="Next"size="30"></li><?php }?>
</ul>
<input type="hidden" name="university" id="university" value="<?php print $s['university']; ?>" size="5">
<input type="hidden" name="branch" id="branch" value="<?php print $s['branch']; ?>" size="5">
<input type="hidden" name="semester" id="semester" value="<?php print $s['semester']; ?>" size="5">
<input type="hidden" name="year" id="year" value="<?php print $s['year']; ?>" size="5">
<input type="hidden" name="n" id="n" value="<?php print $n; ?>" size="5">

<input type="hidden" name="p" id="p" value="<?php print $z; ?>" size="5">
</form>

<?php

}
}
}
}















?>
</body>
</html>