<?php 
error_reporting(0);
if($_POST['submit']=='Send')
{
//keep it inside
$email=$_POST['email'];
$code = $_GET['activation_code'];
$con=mysqli_connect("localhost","root","","pos_system");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$query = mysqli_query($con,"select * from login where email='$email'")
or die(mysqli_error($con)); 

 if (mysqli_num_rows ($query)==1) 
 {
$code=rand(100,999);
$message=" Your Activation Code Is : $code";
mail($email, "Food Universe", $message);
echo 'Email sent';
$query2 = mysqli_query($con,"update login set activation_code='$code' where email='$email' ")
or die(mysqli_error($con)); 
}
else
{
echo 'No user exist with this email id';

}}

?>



<div id="div1" style="margin-top: 160px;">
	
<form action="" method="post">
	
	<table style="margin-top: 60px;margin-left: 130px;">
	
	<tr>
		<td>Enter Your E-mail  ID-</td>
		<td><input type="text" name="email" id="newp" placeholder="XXXXX@mail.com" /></td>
		
		
	</tr>

	
	<tr>
		
		
		
	</tr>
	<tr>
		
		
		
	</tr>
	<tr>
		
		
		
	</tr>

	<tr>
		
		<td></td>
		
		<td><input type="submit" name="submit" value="Send" id="sub"></td>

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
	margin-left: -10px;
	
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
		border-color: aqua;
		
		
	}
	
	#newp{
		height: 50px;
		width: 200%;
		border-radius: 5%;
		background-color: seashell;
		color: blue;
		font-size: 15px;
		border: solid;
		border-color: aqua;
		
		
		
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
