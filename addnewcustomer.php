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
  
  
  <link rel="stylesheet" type="text/css"  href="form.css"/>
  
  
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
		  font-size: 12px;
		  
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
    <button style="width: 100px;">Logout&nbsp;&nbsp;<img src="icons/on-off2.png"></button>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
   
    
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
    <div class="panel-heading" style="font-size:35px;">Add new Customer</div>
    <div class="panel-body" style="height: 446px;">
    	
    					<a href="customerdetails.php"><label style="background-color: skyblue;color:white;border-radius: 5px;border: groove;margin-left: 900px;">Customer Details<img src="icons/user12.png"></label></a>
    	
		
						<?php
		
							$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
							$db = mysql_select_db("pos_system", $connection); // Selecting Database from Server

		
							

		
							if(isset($_POST['submit'])){
        					$sql =mysql_query("INSERT INTO add_new_customer (customer_id,first_name,last_name,email,phone_number,adress_1,adress_2,city,province,nic,country)
        					VALUES ('NUll','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["pnumber"]."','".$_POST["address1"]."','".$_POST["address2"]."','".$_POST["city"]."','".$_POST["province"]."','".$_POST["nic"]."','".$_POST["country"]."')");
								
								
    						}

							
		
							mysql_close($connection); // Closing Connection with Server

					
  
							?>
    					
		
		
						
    						
    				
    					
    		
    			<form action="addnewcustomer.php" method="post" >
    			
    			
    						
    				
    					<table align="center">
    						
    							<tr>
    								
    								<td>First Name</td>
    								<td><input type="text" name="fname" id="fname"/></td>
    								
    								
    							</tr>
    						
    							<tr>
    								
    								<td>Last Name</td>
    								<td><input type="text" name="lname" id="lname"/></td>
    								
    								
    							</tr>
    						
    						
    							<tr>
    								
    								<td>Email</td>
    								<td><input type="email" name="email" id="email"/></td>
    								
    								
    							</tr>
    							
    							<tr>
    								
    								<td>Phone Number</td>
    								<td><input type="text" name="pnumber" id="pnumber"/></td>
    								
    								
    							</tr>
    							
    							
    							<tr>
    								
    								<td>Address 1</td>
    								<td><input type="text" name="address1" id="address1"/></td>
    								
    								
    							</tr>
    							
    							
    							<tr>
    								
    								<td>Address 2</td>
    								<td><input type="text" name="address2" id="address2"/></td>
    								
    								
    							</tr>
    							
    							<tr>
    								
    								<td>City</td>
    								<td><input type="text" name="city" id="city"/></td>
    								
    								
    							</tr>
    							
    							<tr>
    								
    								<td>Province</td>
    								<td><input type="text" name="province" id="province"/></td>
    								
    								
    							</tr>
    							
    							<tr>
    								
    								<td>NIC</td>
    								<td><input type="text" name="nic" id="nic"/></td>
    								
    								
    							</tr>
    							
    							<tr>
    								
    								<td>Country</td>
    								<td><input type="text" name="country" id="country"/></td>
    								
    								
    							</tr>
    							
    							
    							<tr>
    								
    								
    								<td><input type="submit" name="submit" id="submit" value="Add Coustomer"/></td>
    								<td><input type="reset" name="" id="reset"/></td>
    								
    								
    							</tr>
    							
    							
    							
    						
    						
    						
    					</table>
    				
    				
    				
    				
    			</form>
    			
    			
    		
    				
    					
    					
    						
    			
    		
   					
   						
    		
    	
    	
    </div>
    
    
  </div>
  
  
  
    		
</div>





	


</body>



	
    				
		



</html>











