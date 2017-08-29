<?php 
ini_set('display_errors',0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*if(!empty($_POST['submit']))
{*/

else{
  if(!empty($_POST['submit'])){

$fname=$_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone=$_POST['phone'];
$addr_line1=$_POST['addr_line1'];
$state=$_POST['ctate'];
$city=$_POST['city'];
$zip_code=$_POST['zip_code'];

$sqll = "SELECT * FROM users WHERE username='$email'";
$result = mysqli_query($conn, $sqll); 
  if (mysqli_num_rows($result) > 0) 
  {
       header("Location:usernameexists.php");
  }

  else
  {
      //echo $fname;
    $sql = "INSERT INTO users
VALUES ('$fname', '$lname','$password', '$email', '$addr_line1', '$state', '$city', '$zip_code', 'customer');";
 // mysql_query($sql, $con);
$conn->query($sql);

    header("Location:login_page.php");

mysqli_close($conn);
}

}
}

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

</head>

<body>
<div id="wrapper">
<div class="logo" style="background-color: #fff;">
              LOGO here!
            </div>

<div class="container container-width">



<form action="" method="post" class="form-inline" enctype="multipart/form-data">
<table>
<label class="label-width">First Name:</label><input type="text" name="fname" id="fname" class="form-control" required><br><br>
<label class="label-width">Last Name:</label><input type="text" name="lname" id="lname" class="form-control" required><br><br>

<label class="label-width">Username:</label><input type="text" name="email" id="email" class="form-control" required><br><br>
<label class="label-width">Password:</label><input type="password" name="password" class="form-control" id="password" required><br><br>
<label class="label-width">Phone:</label><input type="text" name="phone" id="phone" class="form-control" required><br><br>
<label class="label-width">Address:</label><input type="textarea" name="addr_line1" class="form-control" id="addr_line1" required><br><br>
<label class="label-width">City:</label><input type="text" name="city" id="city" class="form-control" required><br><br>
<label class="label-width">State:</label><input type="text" name="state" id="state" class="form-control" required><br><br>
<label class="label-width">Zip Code:</label><input type="text" name="zip_code" id="zip_code" class="form-control" required><br><br>
<input class="btn btn-default" type="submit" value="submit" name="submit">
</table>
</form>

</div>
</div>
 <div class="footer">
 <div class="footer-position">
 <span class="copyright"> Copyright © 2016</span>
 </div>    
</div>
</body>
</html>



