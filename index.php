<html>
<head></head>

<body style="background-color:lightgrey">

<?php
require 'config.php';
if(isset($_POST['submit']))
{
$username=$_POST['username'];	
$password=$_POST['password'];	
 $sql="SELECT * FROM account where username='$username' AND password='$password' ";
 $result=mysql_query($sql);
 $numrows=mysql_num_rows($result);
 if($numrows == 1)
 {
	 $row=mysql_fetch_assoc($result);
	 $id=$row['id'];
	 header("location: homepage.php?id=$id");
 }
 else
 {
	 echo "<center><h2><font color='red'>Invalid Username Or password</font></h2></center><br>";
}
}
?>


<center>
<h1> wellcome The user </h1>
<br><br>
<br><br>
<form method="post" action="#">
       Username <input type ="text" name="username" /><br><br><br><br>
       Password <input type ="password" name="password" /><br><br><br><br>
	  
	  <input type="submit" name="submit" value="login in" />
	   <a href="regster.php"><button type="button" onclick="alert("wlcome new user")">new user</button></a>
</form>
</center>

</body>




<footer></footer>
</html>