
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
  
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  
  
  
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

/*table*-----------------------------------------------------*/

	  tr{
		  font-size: 12px;
		  
		  
	  }
	  
	  td{
		  
		font-size: 15px;  
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
    <div class="panel-heading">Sales History</div>
    <div class="panel-body" style="height: 446px;">
    	
    	 <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>

    	
    	
    	
    		
    		<form method="post" action="sales_history.php">
    		
    		<input name="date" id="datepicker"  style="font-size: 20px;border-radius: 5px;text-decoration: none;"/><img src="icons/if_calendar_1814093.png">
    		
    		<button name="d" type="submit" style="font-size: 15px;border-radius: 6px;" >Search<img src="icons/search.png"></button>
    		
    		
    		
   		
   				<table class="table">
    <thead>
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Cash</th>
            <th>Invoice Number</th>
            <th>Quantity</th>
            <th>Selling Date</th>
            <th>Net Amount</th>
        </tr>
    </thead>
    <tbody>
      
     <?php
		
				
			
				if(isset($_POST['d'])){
							
							
					
							$dates=$_POST['date'];
							
							
							$query="select item_name,price,discount,cash,invoice_number,quantity,selling_date,net_amount from sales_log where selling_date='$dates'";
							
							
					
						
				$q=mysql_query($query);
		
          while($rows = mysql_fetch_array($q)){
            echo
            "<tr>
              <td>{$rows['item_name']}</td>
			  <td>{$rows['price']}</td>
			  <td>{$rows['discount']}</td>
			  <td>{$rows['cash']}</td>
			  <td>{$rows['invoice_number']}</td>
			  <td>{$rows['quantity']}</td>
			  <td>{$rows['selling_date']}</td>
			  <td>{$rows['net_amount']}</td>
              
            </tr>\n";
          }
								
				
				}
				
		
        ?>


      
    </tbody>
</table>
   		
   						
    		
    		</form>
    		
    		
    		
    		
    		
    	
    </div>
    
    
  </div>
  
  
  
    		
</div>





	


</body>



</html>











