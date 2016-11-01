<?php 
	error_reporting(0);
	session_start();
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ecommerce";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$added_by = $_SESSION['pmId'];
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "upload/".$_FILES["fileToUpload"]["name"]);
	$name=$_POST['name'];
	$category_name = $_POST['category_name'];
	$product_id=$_POST['product_id'];
	$price = $_POST['price'];
	$description=$_POST['description'];
	$Supplier_id=$_POST['Supplier_id'];
	$fileToUpload=$_FILES["fileToUpload"]["name"];
	
	$sql = "INSERT INTO Product (name, product_id, description, price, image, Category_name, added_by, Supplier_id)
	VALUES ('$name', '$product_id', '$description', '$price',  '$fileToUpload', '$category_name', '$added_by' ,'$Supplier_id');";
	$id=$row['id'];
	if(!empty($_POST['submit'])) {
		if ($conn->query($sql) === TRUE) {
			echo "Your product was successfully added!";
	}
	header("Location: product_management.php");
	}
	mysqli_close($conn);
?>
<!doctype html>
	<html>
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
<style>
body{ background-color: #EFEFEF;}
.container-width{max-width: 500px; margin: 0 auto; margin-top: 100px; background-color: #fff; border-radius: 5px; padding: 30px 100px 100px 100px; border: 1px solid #e66000; box-shadow: 0px 0px 6px 2px rgba(0,0,0, 0.2);}
.btn-default{background-color: #e66000; color: #fff; font-weight: 300; float: left; margin-right: 15px; margin-left: 50px; margin-top: 30px;}
.btn-default:hover{color:#e66000; background-color: #fff; border: 1px solid #e66000;}
.label-width{width: 100px;}
.label-width-image{width: 200px;}
.heading{padding: 10px 10px 50px 0px; color: #e66000; font-weight: 600; font-size: 20px;}
.footer{background-color: #2C3E50;width: 100%;padding: 15px;margin-top: 35px;bottom: 0px;left: 0px;
}
.copyright{color:#fff; font-family:"Lucida Sans Unicode";}
.footer-position{max-width: 390px;margin: 0 auto;font-size: 14px;}
.it-height{height: 800px;}
#wrapper{min-height:820px;position:relative;}
</style>

	<body>
	<div id="wrapper">
		<div class="logo">
           LOGO here!
        </div>
        <nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    <ul class="nav navbar-nav">
      <?php if(isset($_SESSION['adminId']))
     echo  "<li><a href='admin.php'><strong>Home</strong></a></li>";
	  
	  if(isset($_SESSION['subadminId']))
			echo  "<li><a href='subadmin.php'><strong>Home</strong></a></li>";
			if(isset($_SESSION['paymentmgrId']))
			echo  "<li><a href='paymentmgr.php'><strong>Home</strong></a></li>";
			?>			
     
     
      
       <ul class="dropdown-menu">
          <?php if(isset($_SESSION['adminId']))
     echo  "<li><a href='user_management.php'>User Management</a></li>
  		<li><a href='product_management.php'>Product Management</a></li>
		<li><a href='manage_category.php'>Manage Categories</a></li>
		<li><a href='roles.php'>Manage Roles</a></li>
  		<li><a href='payment_management.php'>Payments</a></li>";
	  if(isset($_SESSION['subadminId']))
			echo  "<li><a href='user_management.php'>User Management</a></li>
  		<li><a href='product_management.php'>Product Management</a></li>";
		if(isset($_SESSION['paymentmgrId']))
			echo  "<li><a href='payment_management.php'>Payment management</a></li>"; ?>
            <?php 
			$_SESSION['adminrights'] = "adminrights";
			$_SESSION['paymentmgrrights'] = "paymentmgrrights";
			?>
        </ul>
      </li>
    </ul>
    
  </div>
</nav>
<div class="container container-width">
<div class="heading">Add Product</div>
<form name="myForm" class="form-inline" role="role" action="" method="post" enctype="multipart/form-data">
<table>
<label class="label-width">Name:</label><input type="text" name="name" id="name"><br><br>
<label class="label-width">Product ID:</label><input type="text" name="product_id" id="product_id"><br><br>
<label class="label-width">Description:</label><input type="text" name="description" id="description"><br><br>
<label class="label-width">Category Name:</label><input type="text" name="category_name" id="category_name"><br><br>
<label class="label-width">Price: $</label><input type="text" name="price" id="price"><br><br>
<label class="label-width">Supplier ID:</label><input type="text" name="Supplier_id" id="Supplier_id"><br><br>
<label class="label-width-image">Select image to upload:</label><input type="file" name="fileToUpload" id="fileToUpload"><br><br>
<a class="btn btn-default" href="product_management.php">Cancel</a>
<input type="submit" class="btn btn-default" value="Submit" name="submit">
</table>
</form>

</div>
 <div class="footer">
 <div class="footer-position">
 <span class="copyright"> Copyright © 2016</span>
 </div>    
</div>
</div>
</body>
</html>