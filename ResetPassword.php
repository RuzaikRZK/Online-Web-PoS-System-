<?php

if(isset($_POST['pass'])){
$pass = md5($_POST['pass']);
$acode=$_POST['code'];

$con=mysqli_connect("localhost","root","","pos_system");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$query = mysqli_query($con,"select * from login where activation_code='$acode'")
or die(mysqli_error($con)); 

if (mysqli_num_rows ($query)==1) 
{
$query3 = mysqli_query($con,"update login set Password='$pass' where activation_code='$acode'")
or die(mysqli_error($con)); 

echo 'Password Changed';
}
else
{
echo 'Wrong CODE';
}
}
?>


<header>
	
	<img src="icons/Food-Universe-Marketplace-Final-01-copy-300x154.png">
	
</header>

<hr/>


<div id="div1" align="center">
  
<form action="" method="POST">

<table cellpadding="4px;" cellspacing="3px;">
	<tr>
    <td>Enter Activation Code -</td>
     <td><input type="text" name="code"  id="act" placeholder="XXXXXX"/></td>



</tr>

<br/>




<tr>
  
<td>New Password -</td>
<td><input type="password" name="pass"  id="newp"/></td>


</tr>

<br/>







<tr>
  
<td><input type="submit"  name="submit" value="Sign Up !"  id="sub"/></td>



</tr>


	
</table>



</form>



</div>


<style type="text/css">
  

#div1{

  margin-top: 14%;
	margin-right: 48px;
	border: groove;
	border-width: thin;
	height: 250px;
	width: 950px;
	background-image: url(icons/3d-white-and-blue-backgrounds-powerpoint.jpg);
	margin-left: 20px;
	border-radius: 5px;
	margin-top: 15px;
	padding-right: 20px;
	margin-left: -100px;
	
}
	
	
	body{
		
		background-image: url(icons/yryr.jpg)
		
	}
	
	
	#act{
		height: 50px;
		width: 200%;
		border-radius: 5%;
		background-color: seashell;
		color: red;
		font-size: 15px;
		border: groove;
		border-color: yellow;
		
		
	}
	
	#newp{
		height: 50px;
		width: 200%;
		border-radius: 5%;
		background-color: seashell;
		color: blue;
		font-size: 15px;
		border: solid;
		border-color: yellow;
		
		
		
	}
	
	#sub{
		
		font-size: 20px;
		color: red;
		
		background-repeat: no-repeat;
		background-position: right;
		height: 40px;
		background-color: lightskyblue;
		border-radius: 6px;
		
		background-color: red;
		color: azure;
		width: 120px;
		
		
		
	}
	
	tr{
		font-size: 15px;	
		
	}
	
	td{
		font-size: 35px;
		
		
	}
	
	
	hr{
		
		height: 2px;
		
	}
	
	


</style>