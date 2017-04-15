<?php
$str="adersh is an engineering student";
print $str;
$words=explode(" ",$str);
print $words[1];
print $words[0];
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
$sql="create table files(filename varchar(50) not null,location varchar(100) not null,subject varchar(25) not null,university varchar(6) not null,branch varchar(5) not null,semester varchar(5) not null,year int(2) not null,username varchar(20) not null,keywords text not null,primary key(filename))";
$result=mysql_query($sql);
?>
