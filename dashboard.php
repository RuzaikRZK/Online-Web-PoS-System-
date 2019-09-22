<!DOCTYPE html>
<html>
<head>
	<title>Food Universe</title>
	
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  
  
  
  
  <style>
body {
    margin: 0;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 15%;
    background-color: rgba(86,79,79,1.00);
    position: fixed;
    height: 100%;
    overflow: auto;
	margin-top: -21px;
}

li a {
    display: block;
    color: #F8F2F2;
    padding: 8px 16px;
    text-decoration: none;
	text-decoration-line: none

	
}



li a:hover:not(.active) {
    background-color: #D35254;
    color: white;
	 text-decoration: none;
	text-decoration-line: none
}
	  
	  
	  .container{
		  
		  float: right;
		  margin-top:-18px;
		  margin-left: 5px;
		  margin-right: -4px;
		  font-size: 35px;
		  
	  }
	  
	  
	  /*  Drop Down Button*/
	  
	  
	  .dropbtn {
		  
		  
  
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 11px 14px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}



	  
	  
	 
</style>
  
	
</head>
<body>

	<nav class="navbar navbar-default" style="width: 1350px;">
  <div class="container-fluid" style="background-color: rgba(94,66,66,1.00); width: 1350px;margin-left: -2px;margin-top: 1px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color: rgba(241,230,231,1.00);font-size: 40px;">Food Universe <img src="icons/letter-f2.png"></a>
     
       <div class="dropdown" style="margin-left: 1240px; margin-top: -200px;"><img src="icons/if_Snapchat_UI-11_2310087 (2).png" style="margin-bottom: -50px;">
  <button class="dropbtn"></button>
  <div class="dropdown-content">
  
  
  
   
    
    <form action="dashboard.php" method="post" style="font-size: 10px;">
    		<input type="submit" name="sub" value="logout" style="width: 100px;background-image: url(icons/on-off2.png);background-repeat: no-repeat;"/>
    		
    	
    	
    </form>
    <a style="font-size: 10px;" href="user_registration.php"><img src="icons/t.png">User Account</a>
    
    

   
   	 <?php
	 
	  	if(isset($_POST['sub'])){

			session_start();
			session_unset();
			session_destroy();
			header("Location:Login.php");
			exit();

		}
	  

?>
    
 
    
   
   
    
  </div>
</div>

       
       
       
      
    </div>
   
  </div>
</nav>

<div>
	
<ul>
  <li style="background-color:rgba(73,140,91,1.00);"><a href="dashboard.php">Dashboard &nbsp;  &nbsp; &nbsp;&nbsp;  <img src="icons/if_dashboard_blue_68713.ico"></a></li>
  
  <li><a href="addnewcustomer.php">Customers&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<img src="icons/business_user.png"></a></li>
  
   <li><a href="add_new_item.php">Items&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <img src="icons/shopping_cart.png"></a></li>
  
  
  <li><a href="">Price Rules&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp; <img src="icons/dollar_currency_sign.png"></a></li>
  
  <li><a href="add_new_supplier.php">Suppliers&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="icons/icons8-Shipped-32.png"></a></li>
  
  <li><a href="reports.php">Reports&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="icons/chart.png"></a></li>
  
  <li><a href="sales_history.php">Sales History&nbsp;  &nbsp; &nbsp;&nbsp;  &nbsp;  <img src="icons/sale.png"></a></li>
  
   
  <li><a href="add_new_employee.php">Employees&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img src="icons/users.png"></a></li>
  
  <li><a href="">Discounts&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="icons/tag.png"></a></li>
  
  <li><a href="">Store&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <img
    src="icons/home.png"></a></li>
</ul>
	
	
</div>


<div class="container" >
 
  <div class="panel panel-default" style="margin-left: 6px;">
    <div class="panel-heading">DashBoard &nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   					<label style="font-size: 20px;color:white;font-size:20px;width:17%;background-color:rgba(231,73,76,1.00);border-radius: 5px;margin-left: 100px;">
   						
   		<?php


	$mysql_host="localhost";
	$mysql_user="root";
	$mysql_password="";

	$mysql_db="pos_system";
	
	if(!mysql_connect($mysql_host,$mysql_user,$mysql_password) || !mysql_select_db($mysql_db)){
		die(!mysql_errno());
		echo("System Disconnected"); 
		
	}else{
		
		echo("System Connected");
		
	}

?>
   						
   						
   					</label>
						</div>
    <div class="panel-body" style="height: 446px;">
    	
    		
    		<div style="float: left;background-color: lightcoral;border-radius: 5px; font-size: 27px;width: 30%;color: aliceblue;margin-left: 25px;font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;">
    			
    			<label>&nbsp;&nbsp;<b>Total Sales</b></label><br/>&nbsp;&nbsp;
    			<img src="icons/sale 64.png">
    			
    				
    			<?php
				
				$con = mysql_connect("localhost","root","");
				if (!$con) {
  				die('Could not connect: ' . mysql_error());
				}

				mysql_select_db("pos_system", $con);

				$result = mysql_query("select count(*) FROM sales_log");
				$row = mysql_fetch_array($result);

				$total = $row[0];
				

				mysql_close($con);
				
				?>		
    					
    			
    			
    				<label style="margin-left: 160px;font-size: 150%"><?php echo  $total; ?></label>
    		
    			
    			
    			
    			
    			
    		</div>
    		
    		<div style="float: left;background-color:coral;border-radius: 5px; font-size: 27px;width: 30%;color: aliceblue;margin-left: 27px;font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif">
    			
    			<label>&nbsp;&nbsp;Total Customers</label><br/>&nbsp;&nbsp;
    			<img src="icons/business_user 64.png">
    			
    			
    				
    			<?php
				
				$con = mysql_connect("localhost","root","");
				if (!$con) {
  				die('Could not connect: ' . mysql_error());
				}

				mysql_select_db("pos_system", $con);

				$result = mysql_query("select count(*) FROM add_new_customer");
				$row = mysql_fetch_array($result);

				$total = $row[0];
				

				mysql_close($con);
				
				?>		
    					
    			
    			
    				<label style="margin-left: 160px;font-size: 150%"><?php echo  $total; ?></label>
    		
    			
    			
    			
    			
    		</div>
    		
    		<div style="float: left;background-color:lightskyblue;border-radius: 5px; font-size: 27px;width: 30%;color: aliceblue;margin-left: 20px;font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;">
    			
    			
    			
    			
    			<label>&nbsp;&nbsp;Total Items</label><br/>&nbsp;&nbsp;
    			<img src="icons/shopping_cart64.png">
    			
    			
    			
    			
    			<?php
				
				$con = mysql_connect("localhost","root","");
				if (!$con) {
  				die('Could not connect: ' . mysql_error());
				}

				mysql_select_db("pos_system", $con);

				$result = mysql_query("select count(*) FROM add_new_item");
				$row = mysql_fetch_array($result);

				$total = $row[0];
				

				mysql_close($con);
				
				?>		
    					
    			
    			
    				<label style="margin-left: 160px;font-size: 150%"><?php echo  $total; ?></label>
    		
    			
    				<br/>
    			
    				
    			
    		
    			
    			
    		</div>
    		
    		<br/><div style="background-color: sandybrown;height: 150px;width: 330px;margin-top: 100px;margin-left: 3px;border-radius: 6px;border:outset;border-color:sandybrown;">
    					
    					
    					<label style="margin-left: 120px;"><center><img src="icons/shop_cart.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="sell.php"><img src="icons/if_addthis_386580.png"></a></center></label><br/>
    					
    					<label style="font-size: 30px;margin-left: 50px;margin-top: 14px;">Start a New Sale</label>
    					
    					
    				<div style="float: right;margin-right: -380px;background-color: gold;margin-top:-60px;height: 150px;width: 350px;border-radius: 6px;border:outset;border-color: yellow;">
    					
    					
    					<label style="margin-left: 130px;"><center><img src="icons/track_icon&48.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><img src="icons/if_addthis_386580.png"></a></center></label><br/>
    					
    					<label style="font-size: 30px;margin-left: 30px;margin-top: 14px;">Start a New Receving</label>
    					
    					
    						
    				<div style="float: right;margin-right: -380px;background-color: lightgreen;margin-top:-60px;height: 150px;width: 350px;border-radius: 6px;border:outset;border-color: lightgreen;">
    					
    					
    					
    					<label style="margin-left: 130px;"><center><img src="icons/bag-with-discount-symbol-of-percentage.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=""><img src="icons/if_addthis_386580.png"></a></center></label><br/>
    					
    					<label style="font-size: 30px;margin-left:70px;">Set New Offer</label>
    					
    					
    						
    					
    					
    				</div>
    					
    					<br/>
    					
    					&nbsp;&nbsp;
    					
    					<?php
						$date= date("Y/m/d");
						

						?> 
						
						
					
						
						<label style="margin-top: 55px;"><iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:100px;height:100px;"src="http://www.clocklink.com/html5embed.php?clock=041&timezone=SriLanka_Colombo&color=green&size=150&Title=&Message=&Target=&From=2017,1,1,0,0,0&Color=green"></iframe></label>
    	
  						
  						
  							
   				
    				
  						
  						
   						
   						
    					
    				</div>
    	
    					
    	
   					<label style="margin-left:-22px;color:yellowgreen;font-size:22px;margin-top:90px;width:250%;background-color: rgba(69,62,62,1.00);border-radius: 5px;">	
   						
   							
   								<?php 
 					date_default_timezone_set('Asia/Colombo');
 					$date= date('H') ;
						
						
						if($date==8){
							
							echo("System is Opened !");
							
						}elseif($date>=18){
							
							echo("System is Closed !");
							
						}else{
							
							echo("Goin To Closed !");
							
						}
						
						
 						?>
   					
   						
					</label>
   				
   			
    		
   					
   						
    		
    	
    	
    </div>
    
    
  </div>
  
  
  
    		
</div>





	


</body>



</html>











