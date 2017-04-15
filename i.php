
<?php
$a= array( '1' => 'elem 1', '2'=> 'elem
2', '3'=>' elem 3');
print_r($a);
echo ("<br></br>");
$b=serialize($a);
print_r($b);

$c=unserialize($b);
print "<br>";
print_r($c);
print "<br>";
$i=count($c);
print $i;
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
$sql="create table files(filename varchar(50) not null,location varchar(100) not null,subject varchar(25) not null,university varchar(6) not null,branch varchar(5) not null,semester varchar(5) not null,year int(2) not null,username varchar(20) not null,keywords text not null,primary key(filename))";
$result=mysql_query($sql);
?>













 

