<html>
<title>
MINI-SEARCH
</title>

<body style="background-color:lightblue;">
<?php
error_reporting(0);
$x=0;
if($_POST['password']==$_POST['cpassword'])
{
if(isset($_POST['submit']))
{
$db['username']=strtolower($_POST['username']);
$db['password']=$_POST['password'];
$db['firstname']=$_POST['firstname'];
$db['lastname']=$_POST['lastname'];
$db['address']=$_POST['address'];
$db['sex']=$_POST['sex'];
$db['age']=$_POST['age'];
$db['university']=$_POST['university'];
$db['branch']=$_POST['branch'];
$db['emailid']=$_POST['emailid'];
$db['mobileno']=$_POST['mobileno'];

}
$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);
if($db_found)
{

$sql3="select * from student where student.username='".$db['username']."'";
$result3=mysql_query($sql3);
$data3=mysql_fetch_assoc($result3);
$sql4="select * from registration where registration.username='".$db['username']."'";
$result4=mysql_query($sql4);
$data4=mysql_fetch_assoc($result4);
if(($data3['username']!=null)or($data4['username']!=null))
{
?>
<br><br><br><br><br><br><br><br>

<pre style="font-family:stencil std;font-size:50px;color:red;"><b>          USERNAME IS ALREADY EXIST,<br>               CHOOSE ANOTHER NAME</b></pre><?php
$x=1;

}
else
{
$sql="insert into registration(username,firstname,lastname,address,sex,age,university,branch,emailid,mobileno) values('".$db['username']."','".$db['firstname']."','".$db['lastname']."','".$db['address']."','".$db['sex']."','".$db['age']."','".$db['university']."','".$db['branch']."','".$db['emailid']."','".$db['mobileno']."')";
$result=mysql_query($sql);
$sql="insert into login(username,password) values('".$db['username']."','".$db['password']."')";
$result=mysql_query($sql);



mysql_close($db_handle);
}
}
else
{
?>
<br><br><br><br><br><br><br><br>

<pre style="font-family:stencil std;font-size:50px;color:red;"><b>          TECHNICAL ERROR! PLEASE TRY AGAIN</b></pre><?php
$sql="create database project1";
$result=mysql_query($sql);



$user_name="root";
$password="";
$database="project1";
$server = "127.0.0.1";
$db_handle=mysql_connect($server,$user_name,$password);
$db_found=mysql_select_db($database,$db_handle);

$sql="create table student(username varchar(20),firstname varchar(10) not null,lastname varchar(10) not null,address varchar(25) not null,sex varchar(6) not null,age int(2) not null,university varchar(6) not null,branch varchar(5) not null,emailid varchar(30) not null,mobileno decimal(10,0) not null,photo varchar(30) not null,primary key(username))";
$result=mysql_query($sql);

$sql="create table registration(username varchar(20),firstname varchar(10) not null,lastname varchar(10) not null,address varchar(25) not null,sex varchar(6) not null,age int(2) not null,university varchar(6) not null,branch varchar(5) not null,emailid varchar(30) not null,mobileno decimal(10,0) not null,primary key(username))";
$result=mysql_query($sql);
$sql="create table login(username varchar(20),password text not null,primary key(username))";
$result=mysql_query($sql);

$sql="create table admin(username varchar(20),password text not null,primary key(username))";
$result=mysql_query($sql);
$username="admin";
$password=123456;
$sql="insert into admin(username,password) values('".$username."','".$password."')";
$result=mysql_query($sql);

$sql="create table files(filename varchar(50) not null,location varchar(100) not null,subject varchar(25) not null,university varchar(6) not null,branch varchar(5) not null,semester varchar(5) not null,year int(2) not null,username varchar(20) not null,keywords text not null,primary key(filename))";
$result=mysql_query($sql);
mysql_close($db_handle);
$x=1;
}
if($x==0)
{
?>
<br><br><br><br><br><br><br><br>
<pre style="font-family:stencil std;font-size:40px;color:green;"><b>       YOU ARE SUCCESSFULLY CREATE AN ACCOUNT</b></pre>

<?php } ?><form action="login.php">
    
    <table cellpadding="6" width="30%" bgcolor="lightblue" align="center"
	cellspacing="10">
    <tr>
		<td></td><td><input type="submit" name="return" id="return" value="Click here to go back to login page"size="30"></td>
	</tr>
</form>	


<?php
}
else
{
?>
<br><br><br><br><br><br><br><br>
<pre style="font-size:40px;color:red;"><b>         PASSWORD CONFORMATION IS INCORRECT</b></pre>
<form action="register.php">
    
    <table cellpadding="6" width="30%" bgcolor="lightblue" align="center"
	cellspacing="10">
    <tr>
		<td></td><td><input type="submit" name="wrongpassword" id="wrongpassword" value=" Try Again "size="30"></td>
	</tr>
</form>	
</form>

<?php
}
?>
</body>
</html>