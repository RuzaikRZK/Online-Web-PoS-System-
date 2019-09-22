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

	  
	 /*form-----------------*/ 
	  
	  
.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 20px 0px 60px;
	border: 1px solid GREY;
	}
	  
	 
</style>
 
 
 <script>
	
	$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

	
	</script>
  
	
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
    <div class="panel-heading">Add Item</div>
    <div class="panel-body" style="height: 446px;">
    	
    	
    	
    				<div class="container">
<div class="col-md-5" style="margin-left: 300px;border-color: aliceblue;">
    <div class="form-area" >  
        <form action="add_new_item.php" method="post">
        <br style="clear:both">
                   
                   
                    
                   
                    
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="itname" placeholder="Item Name" required>
					</div>
					<div class="form-group" style="font-size: 20px;"><a href=""><button style="background-color: transparent;"><img src="icons/if_Plus_206460.png"></button></a>
	<select name="category" style="font-size: 17px;background-color:whitesmoke;color: red;">
    <option style="font-size: 20px;">Select Category</option>
   
    
    
    <?php
		 $query="SELECT DISTINCT  category_name FROM add_new_category";
    $result=mysql_query($query);
    while(list($lot_number)=mysql_fetch_row($result)) {
        echo "<option value=\"".$lot_number."\">".$lot_number."</option>";
				
	}
	?>
  </select>
				
				
				
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="mobile" name="cp" placeholder="Cost Price" required>
					</div>
					
					<div class="form-group">
						<input type="number" class="form-control" id="mobile" name="sp" placeholder="Selling Price" required>
					</div>
					<div class="form-group">
						<input type="number" class="form-control" id="mobile" name="qu" placeholder="Quantity" required>
					</div>
					
					
					
					
					<div style="font-size: 20px;">
					<label>
						<img src="icons/if_ic_add_shopping_cart_48px_352007.png">
						<input type="submit"  id="submit" name="submit"  required style="background-color:silver; " value="Add Item">
						
					</label>
		
					</div>
						
					<?php
					if(isset($_POST['submit'])){
        					$sql =mysql_query("INSERT INTO add_new_item (item_id,item_name,category,cost_price,selling_price,quantity)
        					VALUES ('NUll','".$_POST['itname']."','".$_POST['category']."','".$_POST['cp']."','".$_POST['sp']."','".$_POST['qu']."')");
								
								
    				}
			
					?>
           			
            
       
        </form>
      
      
        
   
</div>

      <div style="margin-left:-250px;font-size: 20px;margin-top:-470px;background-color:salmon;width: 210px;border-radius: 5px;color: aliceblue;border: solid;border-color: transparent;">
    	<a href="item_details.php"><label style="color: aliceblue;">Item Details <img src="icons/medical-notes-symbol-of-a-list-paper-on-a-clipboard.png"></label> </a>
    		</div>
    		
    		<br/>
    		
    		
    		<div style="margin-left:-250px;background-color: sandybrown;width: 210px;border-radius: 5px;color: aliceblue;">
    		
    		
    				<?php
						$result = mysql_query("select count(*) FROM add_new_item");
				$row = mysql_fetch_array($result);

				$total = $row[0];
					?>
    			
    				<label style="font-size: 20px;">Total Items</label>
    				<img src="icons/shop_cart.png">
    				<label style="font-size: 35px;color: papayawhip;"><?php echo $total; ?></label>
    				
    				
    				
    				
    				
    			
    			
    		</div>

	</div>
</div>
  	
   		
   	
   						
  	
      			
 		
   
    
  




	


</body>



</html>











