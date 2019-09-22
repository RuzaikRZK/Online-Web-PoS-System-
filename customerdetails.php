<?php 
	require 'db.php';
?>
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



	  
/*Search bar code*/
	  
	  #search {
    float: right;
    margin-top: 30px;
    width: 250px;
}

.search {
    padding: 5px 0;
    width: 250px;
    height: 60px;
    position: relative;
    left: 10px;
    float: left;
    line-height: 22px;
}

    

        .search:hover input, .search input:focus {
            width: 200px;
            margin-left: 0px;
        }

.btn {
    height: 30px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
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
  
  
  
   
    
    <form action="dashboard.php" method="post">
    		<input type="submit" name="sub" value="logout" style="width: 100px;background-image: url(icons/on-off2.png);background-repeat: no-repeat;"/>
    		
    	
    	
    </form>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
    

   
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
    <div class="panel-heading">Customer Details</div>
    <div class="panel-body" style="height: 446px;">
    	
    	
    			
  
		
		
					
				
						<?php
		
							$nic="";
							$cid="";
							$fname="";
							$lname="";
							$email="";
							$pn="";
							$n="";
							$n=NULL;
							
							
							
						if(isset($_POST['searched'])){
							
							
							
							
							
								
							$n=$_POST['nicd'];
								
								
							
								
		
							$query="select customer_id,first_name,last_name,email,phone_number,nic from add_new_customer where nic='$n'";
							$q=mysql_query($query);
		
							while($row=mysql_fetch_array($q)){
								
							$cid=$row['customer_id'];
							$fname=$row['first_name'];
							$lname=$row['last_name'];
							$email=$row['email'];
							$pn=$row['phone_number'];
							$nic=$row['nic'];
								
								
								
								
							}
								
							
		
					}else{
							$nic="";
							$cid="";
							$fname="";
							$lname="";
							$email="";
							$pn="";
							$n="";
							
							
					}
		
						?>
		
    	
    	<div>
    	
    	<form action="customerdetails.php" method="post">
    	
    			
    		
    			<table align="center" cellspacing="10px" >
    			
    			
    					<tr>
    								
    								
    								<td></td>
    								<td></td>
    								
    								
    								
    					</tr>
    					
    					<br/>
    					
    					
    			
    					<tr>
    								
    								<td>Customer Id</td>
    								<td><input type="number" name="cid" id="cid" value="<?php echo $cid; ?>"/></td>
    								
    								
    					</tr>
    			
    				
    					<tr>
    								
    								<td>First Name</td>
    								<td><input type="text" name="fname" id="fname" value="<?php echo $fname; ?>"/></td>
    								
    								
    					</tr>
    						
    							<tr>
    								
    								<td>Last Name</td>
    								<td><input type="text" name="lname" id="lname" value="<?php echo $lname; ?>"/></td>
    								
    								
    							</tr>
    						
    						
    							<tr>
    								
    								<td>Email</td>
    								<td><input type="email" name="email" id="email" value="<?php echo $email; ?>"/></td>
    								
    								
    							</tr>
    							
    							<tr>
    								
    								<td>Phone Number</td>
    								<td><input type="text" name="pnumber" id="pnumber" value="<?php echo $pn; ?>"/></td>
    								
    								
    							</tr>
    							
    							
    							
    							
    							
    							
    							
    							
    							<tr>
    								
    								<td>NIC</td>
    								<td><input type="text" name="nic" id="nic" value="<?php echo $nic; ?>"/></td>
    								
    								
    							</tr>
    					
    			
   				
   								
   												
   																
   																								
									
    								
    			<?php  
						
					
				if(isset($_POST['delete'])){
					
						$c=$_POST['cid'];
					
						$de="DELETE FROM add_new_customer WHERE customer_id='$c'";
						mysql_query($de);
					
					
				}
					
					
				?>
 								
 				<?php  
						
					
				if(isset($_POST['update'])){
					
						$c=$_POST['cid'];
						$fname2=$_POST['fname'];
						$lname2=$_POST['lname'];
						$email2=$_POST['email'];
						$pn2=$_POST['pnumber'];
					$nic2=$_POST['nic'];
					
					
		$up="UPDATE add_new_customer SET first_name='$fname2', last_name='$lname2',email='$email2',phone_number='$pn2',nic='$nic2'  WHERE customer_id='$c'";


						mysql_query($up);
					
					
				}
					
					
				?>
  								
  				
   								
    				
    			</table>
    			
    				
    						
    			<div style="margin-top:10px;margin-left:457px;">
    							
    		
    						<input type="text" name="nicd" id="nicd" placeholder="Enter NIC Number"  style="margin-left:11px;"/><br/>	
    							
    		<button name="delete" type="submit" style="font-size: 15px;margin-top: -180px;width: 100px;">Delete<img src="icons/recycle-full.png"></button>
    							
    							
    	<button name="update" type="submit" style="font-size: 15px;margin-top: -180px;width: 100px;">Update<img src="icons/reload.png"></button>
   												
   												
   	<button name="searched" type="submit" id="searched" style="font-size: 15px;width: 100px;">Search<img src="icons/search.png"></button>
   							
    												
    		</div>
    		
    	</form>
    		
    	</div>
 		
 	
</div>
	</div>
</div>
  	
   		
   	
   						
  	
   
    
  




	


</body>



</html>











