<?php 

error_reporting(0);

session_start(); 

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
if(!empty($_POST['submit'])){
	
	$categoryname = $_POST['categoryname'];
	$categoryid = $_POST['categoryid'];
	$sql = "INSERT INTO Category (name, category_id)
	VALUES ('$categoryname', '$categoryid');";
	if ($conn->query($sql) === TRUE) {
		echo "";}
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Category Management</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
body{ background-color: #EFEFEF;}
.container-width{max-width: 500px; margin: 0 auto; margin-top: 100px; background-color: #fff; border-radius: 5px; padding: 30px 70px 100px 100px; border: 1px solid #e66000; box-shadow: 0px 0px 6px 2px rgba(0,0,0, 0.2);}
.btn-default{background-color: #e66000; width: 100px; color: #fff; font-weight: 300; float: left; margin-right: 15px;  margin-top: 30px;}
.btn-default:hover{color:#e66000; background-color: #fff; border: 1px solid #e66000;}
.label-width{width: 116px;}
.heading{padding: 10px 10px 50px 0px; color: #e66000; font-weight: 600; font-size: 20px;}
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
	position:relative;
}
</style>
<body>
<div class="container-width">
<form name="myForm" class="form-inline" role="role" method="post" action="">
<label class="label-width">New Category:  </label><input class="form-control" type="text" name="categoryname" value="" id="categoryname">
<label class="label-width">Category ID:  </label><input class="form-control" type="text" name="categoryid" value="" id="categoryid">
<a class="btn btn-default" href="manage_category.php">Back</a>
<input type="submit" class="btn btn-default" value="Add" name="submit">

</form>
</div>
</body>
</html>