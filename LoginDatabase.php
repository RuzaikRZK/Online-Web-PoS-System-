
<html>
	

	<head>

		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	

	
	
		
		<?php

$username=$_POST['user'];
$password=md5($_POST['pass']); 
		
		
$user=$_POST['user'];
$pass=$_POST['pass'];		
		

$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysql_real_escape_string($username);
$password=mysql_real_escape_string($password);

mysql_connect("localhost","root","");
mysql_select_db("pos_system");


$result=mysql_query("select * from login where user_name='$username' and password='$password'") or die("Fail To Querey Database".mysql_error());

$row=mysql_fetch_array($result);
		
		
	if($user==null){
		
	
		

		echo '<div class="container">
  
  <div class="alert alert-success">
    <strong>First!</strong> Input The User Name
  </div></div>';





			
		
	}else if($pass==null){
		
		echo("<script>alert('First Input Password')</script>");
		
	}else if($user==null && $pass==null){
		
		
	}else{
		
		if($row['user_name']==$username && $row['password']==$password){
	
	
	

	header('location:dashboard.php');
		
	
	
}else{
	
	echo("<script>alert('Hai')</script>");
	
		
	
	
}
		
		
	}	
		
		




?>
		
		
		
	</head>
	
	

</html>



