<?php
ini_set('display_errors',0);
session_start();
if(isset($_SESSION['customerId']))
{
   header('Location:customer.php');
}
if(isset($_SESSION['pmId']))
{
   header('Location:product_manager.php');
}

/*if(!isset($_SESSION['loginId'])){*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email = "";
$password = "";
if(isset($_POST['email'])){
  $email = $_POST['email'];
 }
if (isset($_POST['password'])) {
  $password = md5($_POST['password']);
 }

$sql = "SELECT * FROM users WHERE username='$email' AND password='$password'";
$result = mysqli_query($conn, $sql); 
	if (mysqli_num_rows($result) > 0) {
		$_SESSION['loginId'] = 1;
		while($row = mysqli_fetch_array($result)) {	
		$_SESSION['sess_userrole'] = $row['role'];
	if( $_SESSION['sess_userrole'] == "Product Manager"){
	$_SESSION['pmId'] = $email;
    header('Location: product_manager.php');
   }
   else if($_SESSION['sess_userrole'] == "customer"){
	   $_SESSION['customerId'] = $email;
      header('Location: customer.php');
	   
   }
  
 }
}
 	else{
/*		session_destroy();*/


		echo "Please login with valid details!";
		
	}


/*if(!empty($_POST['submit']))
{*/


/*$id=$row['id'];
$fname=$_POST['fname'];
$lname = $_POST['lname'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$phone=$_POST['phone'];

$sql = "INSERT INTO users (fname, lname, password, email, phone)
VALUES ('$fname', '$lname','$password', '$email', '$phone');";*/


/*$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fname VARCHAR(255) NOT NULL,
lname VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
email text NOT NULL,
phone VARCHAR(255) NOT NULL,
status tinyint(1) NOT NULL DEFAULT '1'
)";*/


/*$insert=mysqli_query($conn, $sql);


if($insert){
	echo "Table users successfully";
	}else{
		
		echo "Table users not inserted";
		}*/

/*if (mysqli_query($conn, $sql)) {
    echo "Table users successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}*/

//$sql = "DELETE FROM management WHERE id=6";
/*$sql = "DROP TABLE users";


if ($conn->query($sql) === TRUE) {
    echo "success";
}*/

mysqli_close($conn);

?>
<!doctype html>
<html>
<body>
<div class="container">
<div class="wrapper">
<div class="main">
<div class="logo">LOGO here!</div>
<body>
	<style>
body{
	font-size: 15px;
	font-family:"Lucida Sans Unicode";
	margin:0px;
	padding:0px;
	background-color: #EFEFEF;
}
.logo{
	padding-bottom: 50px;
}
.signup{
	display: inline-block;
    text-decoration: none;
    padding: 2px;
    background-color: grey;
    border: 1px solid black;
    width: 56px;
    margin: 5px;
    border-radius: 3px;
    color: #fff;
	font-size: 14px;
	text-align: center;
	
}
.container{
	padding: 155px 50px 0px 50px;
}
.wrapper{
	max-width: 400px;
	margin: 0 auto;
	padding: 50px 10px 10px 10px;
	text-align: center;
	border-radius: 5px;
	background-color: #FFF;
	box-shadow: 0px 0px 6px 2px rgba(0,0,0, 0.2);
}
.form-input{
	padding: 7px;
	border-radius: 7px;
}
.form-data{
	padding: 15px;
	
}
.form-column{
	display: inline-block;
    text-align: left;
    width: 75px;
}
.buybutton{
	cursor: pointer;
    margin-top: 10px;
    background: rgb(255, 255, 255) none repeat scroll 0% 0%;
    border: 2px solid #e66000;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 24px;
    padding: 3px 7px;
    color: #e66000;
    font-size: 13px;
    text-decoration: none;
    font-weight: bold;
	margin-right: 10px;
}
.buybutton:hover{
	background-color: #FF6347;
	color: #fff;
}
.submitButton{
	cursor: pointer;
	border-radius: 24px;
    background-color: #e66000;
    border: 2px solid #e66000;
    color: #fff;
    padding: 6px 12px;
    font-weight: bold;
    text-decoration: none;
	margin-top: 10px;
	margin-right: 10px;
	}
.submitButton:hover{
	background-color: #fff;
	color: #e66000;
}
</style>
<!--
<form action="" method="post" enctype="multipart/form-data">
<table>


Email:<input type="text" name="email" id="email"><br>
Password:<input type="password" name="password" id="password"><br>
<input type="submit" value="submit" name="submit">
</table>

</form> -->

<form action="" method="post" enctype="multipart/form-data">

<div class="form-data">
<div class="form-column">

Email:</div><input class="form-input" type="text" name="email" id="email" placeholder="Please enter your email"></div>
<div class="form-data">
<div class="form-column">
Password:</div><input class="form-input" type="password" name="password" id="password" placeholder="Password"></div>
<div class="form-data">

<input class="submitButton form-input" type="submit" value="Login" name="submit">

<a class="buybutton" href="customer_signup_page.php">Sign up</a>
</div>

</form>



</div>

</body>
</html>