<?php 

error_reporting(0);

session_start();

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Management</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>

.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{padding: 15px;}
.table a{
font-weight: 200;
display: block;
background-color: #e66000;
text-decoration: none;
color: #fff;
padding: 4px 6px;
border-radius: 7px;
text-align: center;
}
.table a:hover{
	color: #fff;
	background-color: #e66000;
	
}
.addbutton{font-weight: 200;
display: inline-block;
background-color: #e66000;
text-decoration: none;
margin-right: 15px;
color: #fff;
padding: 4px 6px;
width: 150px;
margin-top: 20px;
margin-bottom: 30px;
border-radius: 7px;
text-align: center;
text-decoration: none;}
.addbutton:hover{
	color: #e66000;
	background-color: #fff;
	border: 1px solid #e66000;
	text-decoration: none;
}
.footer{
	background-color: #2C3E50;
	width: 100%;
	padding: 15px;
	margin-top: 35px;
	
	bottom: 0px;
	left: 0px;
}
.copyright{color:#fff; font-family:"Lucida Sans Unicode";}
.footer-position{    max-width: 390px;
    margin: 0 auto;
    font-size: 14px;}
.it-height{height: 800px;}
#wrapper{min-height:800px;

}
</style>
<body>
<div id="wrapper">
<div class="logo">
            	<img src="" alt="logo"/>
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
     
      <li><a href="product_management.php"><strong>Manage Products</strong></a></li>
      
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
    <ul class="nav navbar-nav navbar-right">
    
                <li style="color: #fff; font-weight: bold; border-right: 1px solid #fefefe;"><a href="logout.php"> Log Out </a></li>
    </ul>
  </div>
</nav>

<?php 


if(!isset($_SESSION['adminrights']))
{
   header('Location:login.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT name, category_id FROM Category";
 $result = mysqli_query($conn, $sql); 
                        if (mysqli_num_rows($result) > 0) {
							echo "<div class='container'>";
							echo "<table class='table table-hover' border='0' cellpadding='10'>";


echo "<tr><th>Categories</th></tr>";
                            while($row = mysqli_fetch_array($result)) {
								echo "<tr class='table-row'>";
								$category = $row['name'];
								echo "<td>" . $category .  "</td>";
								echo "<td><a href='edit_category.php?id=" . $row['id'] .'&name='.$row['name']."'>Edit</a></td>";
								echo "<td><a href='delete_category.php?id=" . $row['id'] ."'>Delete</a></td>";
							
							}
							echo"</table>";
							echo "<td><a class='addbutton' href='add_category.php'>Add</a></td>";
							
							}
?>
</div>
</div>
 <div class="footer">
 <div class="footer-position">
 <img class="branding" src="http://cdn.commlabindia.com/origin/images/logo-transparent.png" style="width: 30px; height: 30px;"><span class="copyright"> Copyright © 2016</span>
 </div>    
</div>

</body>
</html>