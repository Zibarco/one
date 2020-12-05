<html>
<head><meta charset="UTF-8">
 </head>

<?php
require 'config.php';
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
$username=$_POST['username'];	
$password=$_POST['password'];	
$fname=$_POST['fname'];
$family=$_POST['family'];
$datebirth=$_POST['datebirth'];
$email=$_POST['email'];
$sql="INSERT INTO account (
`id` ,
`username` ,
`password` ,
`firstname` ,
`family` ,
`datebirth` ,
`email`
)
VALUES (
 'NULL',  '$username',  '$password',  '$fname',  '$family',  '$datebirth',  '$email'
)";
mysql_query($sql);
header ("location: index.php");
}
if(isset($_POST['update']))
{
	$sql="UPDATE account SET firstname='$fname',password='$password WHERE username='$username'";
	mysql_query($sql);
header ("location: index.php");
}
if(isset($_POST['delete']))
{
$sql="DELETE  FROM account where password='$password'";
mysql_query($sql);
header ("location: index.php");
	
}


?>

<body style="background-color:green">
<center>
<h1> wellcome A new User </h1>
<br><br>

<form method="post" action="#">
       Username <input type ="text" name="username" /><br><br>
       Password <input type ="password" name="password" /><br><br>
	   First Name <input type ="text" name="fname" /><br><br>
	   Family <input type ="text" name="family" /><br><br>
	   Date Of Birth <input type ="date" name="datebirth" /><br><br>
	   Email <input type ="text" name="email" /><br><br><br><br>
	   <input type="submit" name="submit" value="submit" />
	   <input type="submit" name="submit" value="update" />
	   <input type="submit" name="submit" value="delete" />
	   <a href="index.php"><button type="button" onclick="alert("wlcome user")">تسجيل الدخول</button></a>
</form>
</center>

</body>




<footer></footer>
</html>