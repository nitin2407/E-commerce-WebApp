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

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ecommerce webpage</title>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
body{
	font-family: "Comic Sans MS";  /*"Lucida Sans Unicode"; /*"Montserrati","HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;*/
}
.header{
	
}
.container{
	margin-top: 30px;
}
.searchbar{
	position: absolute;
    right: 24px;
    top: 40px;
    font-weight: bold;
    color: #fff;
    font-size: 19px;
    background-color: white;
    color: #e66000;
    height: 26px;
    width: 30px;
    text-align: center;
    border-radius: 4px;
}
#searchb{
	width: 220px !important;
    color: #fff;
    outline: none;
	z-index: 0;
    top: 35px;
    right: 53px;
    position: absolute;
    overflow: hidden;
    background: transparent;
    border: none;
    border-bottom: 2px solid #fff;
    border-radius: 0;
    height: 30px;
    margin: 0;
    padding: 0;
    font-size: 12px;
	
}

.grid1elements{
	text-decoration: none;
}
.grid1elements ul li{
	list-style: none;
	display: block;
	text-decoration: none;
	font-weight: normal !important;

}
.imagediv{
	display: inline-block;
    padding: 10px;
    vertical-align: top;
}
.contentofimage{
	line-height: 20px;
    display: inline-block;
    width: 376px;
}
#button1{
	border-radius: 3px;
	background-color: #e66000;
	border: none;
	color: #fff;
	padding: 5px 10px;
	box-shadow: 1px 1px 1px 1px grey;
	text-decoration: none;
	margin-top: 5px;
	}
.submitButton{
	background-color: #F00;
	color: #FFF;
	width: 90px;
	padding: 3px;
	height: 25px;
	border-radius: 20px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	vertical-align: top;
	margin-top: 10px;
	font-weight: bold;
	
	}
	h4{
		color :#e66000;
	}
	.grid2 ul li{
		list-style: none;
		list-style: outside none none;
		display: block;
		height: 30px;
		padding: 5px;
		background-color: #e66000;
		width: 64px;
		border-radius: 3px;
		margin-top: 10px;
		left: 0;
		align-content: right;
		float: right;
		color: #fff;
		font-weight: bold;
		box-shadow: 1px 1px 1px 1px grey;
		}
		ul li:hover{
			background-color: #e66000;
		}
		
		.grid2 a{
			text-decoration: none;
		color: #fff;
		background-color: #e66000;
		
		width: 100px;
padding: 0px;

		}
		.grid2 a:hover{
			text-decoration: none;
		color: black;
		background-color: #e66000;		
		}
		.contentofimage{
			line-height: 25px;
			letter-spacing: 0.05em;
			color: #383838;
			font-family: 'Helvetica';
			
width: 60%;
		}
	.contentofimage a:hover{
		text-decoration: none;
		color: #fff;
		background-color: #e66000;
	}
.header ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #484848;
}

.header li {
    float: left;
}

.header li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	font-weight: bold;
	font-size: 15px;
}

.header li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #e66000;
}
.grid2content{
	margin: 0px 0px 15px;
padding: 15px 0px 30px;
border-bottom: 1px solid #EBEBEB;
}
h3{
	border-bottom: 1px solid #EBEBEB;
	padding: 0px 15px 20px 0px;;
}
.buybutton{
	display: inline-block;
margin-top: 10px;
vertical-align: top;
cursor: pointer;
padding: 0px 22px;
background: rgb(255, 255, 255) none repeat scroll 0% 0%;
border: 1px solid #e66000;;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 23px;
letter-spacing: 0.0em;
color: #e66000;;
font-size: em;
font-weight: bold;

}
.buybutton:hover{
	background-color: #e66000;
	color: #fff;
}
.glyphicon-pencil{
	color: #e66000;
}
#searchBar{
	    margin-top: 14px;
    border: none;
    Border-bottom: 1px solid white;
    background-color: #222 !important;
	color: #fff !important;
	outline: none !important;
}
.search-list:hover{background-color: transparent !important;}
.searchButton{
	border: 2px solid grey;
    background-color: grey;
    border-radius: 28px;
    color: #fff;
	margin-right: 12px;
}
.copyright{color:#fff; font-family:"Lucida Sans Unicode";}
.footer-position{    max-width: 390px;
    margin: 0 auto;
    font-size: 14px;}
.it-height{height: 800px;}
#wrapper{min-height:800px;
	position:relative;
}
.footer{
	background-color: #2C3E50;
	width: 100%;
	padding: 15px;
	margin-top: 35px;
	
	bottom: 0px;
	left: 0px;
}

</style>
</head>
<body>
<div id="wrapper">
<div class="container1">
<div class="logo">
            	<img src="" alt="logo"/>
                <div style="float:right; margin-right: 10px; margin-top: 10px; margin-right: 21px;">Welcome, Guest! <strong><?php echo $_SESSION['uname'] ?></strong></div>
            </div>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
       
    </ul>
    <ul class="nav navbar-nav navbar-right">
   
    
   <?php 
	
	?>
   
                   <li style="color: #fff; font-weight: bold; border-right: 1px solid #fefefe; "><a href="login_page.php"> Log in/Signup </a></li>
    </ul>
    
  </div>
</nav>
    	
    </div>
    <div class="container">
    	<div class="col-sm-3">
        	<div class="grid1">
            	<div class="grid1elements">
            	<h3>Categories</h3>
                <div class="flowers-wrap"> 
                <form>
                <?php  
               	$s = "SELECT * FROM category;";
                $r = mysqli_query($conn, $s);

                 while($row = mysqli_fetch_array($r)) {	?>
							
                       
                        <label style='font-size:13px; margin-bottom:10px; letter-spacing: 0.05em; margin-top: 20px; font-family: 'Helvetica';'> 
                        <?php echo $row['name'] ?></label><br>
                 <?php }  ?>
 
                </form>                                  
          		</div>
            </div>
        </div>
    </div>
        <div class="col-sm-9">
        <h3>Courses</h3>
        <div class="flowers">
            	<div class="flower">
                	<div class="grid2">	
                   
 					 <?php 
						session_start();
						$page_title="Products";
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "ecommerce";
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
						if(!empty($_POST['submit'])){
							$search = $_POST['search'];
							$sqll= "SELECT * FROM Product WHERE name LIKE '%".$search."%' OR description LIKE '%".$search."%'";
							$result = mysqli_query($conn, $sqll); 
							if (mysqli_num_rows($result) > 0) {	
							$counts = mysqli_num_rows($result);
						
							?> <h3> Your search matched (<?php echo $counts; ?>) products </h3> <?php 
							
								 while($row = mysqli_fetch_array($result)) {?>	
								<div class="grid2content">
                                 	
                        <div class="imagediv">
                        <img src="<?php echo "upload/".$row['image'];?>" width="200" height="130"/>
                        </div>
                        <?php echo "<div class='product-id' style='display:none;'>{$row['id']}</div>"; ?>
                        <div class="contentofimage">
                         <?php	 
                                echo "<h4>". $row['Name'] ."</h4>" ."<b>".$row['Description']."</b>" . "<br>". "<b>Category: </b>".$row['Category_Name'] ."<br>". "<b>Price: </b>$".$row['Price']; 				
								?>
                                 <div>      
  <input class="buybutton" type="button" value="Buy" name="submit">

      <?php  echo "<a href='#' class='submitButton contentofimage'>Add to cart</a>"; ?>
      	
      </div>
						</div>
                        </div>

</form>
                          <?php   } 
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
						}
							 
						 
					  ?>	
    			</div>
			</div>
              
	</div>
        	 <div class="flowers">
            	<div class="flower" data-id="stench-blossom" data-category="Management">
                	<div class="grid2">
                    	
						<?php 
					
						$page_title="Products";
                        
						$action = isset($_GET['action']) ? $_GET['action'] : "";
						$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : "1";
						$name = isset($_GET['name']) ? $_GET['name'] : "";
						 
						if($action=='added'){
							echo "<div class='alert alert-info'>";
								echo "<strong>{$name}</strong> was added to your cart!";
							echo "</div>";
						}
						
						if($action=='exists'){
							echo "<div class='alert alert-info'>";
								echo "<strong>{$name}</strong> already exists in your cart!";
							echo "</div>";
						}
						
                        $sql = "SELECT Product_id, Name, Category_Name, Price, Image, Description FROM product";
                        $result = mysqli_query($conn, $sql); 
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {		
                         ?>
                      

                    	<form action="#" method="post">
 <input type="hidden" name="item_id" value="<?php echo $row['id'] ?>">
  <input type="hidden" name="item_name" value="<?php echo $row['name'] ?>">
  <input type="hidden" name="item_price" value="<?php echo $row['price'] ?>">
    <input type="hidden" name="item_category" value="<?php echo $row['category'] ?>">
                        
                         <div class="grid2content">
                        <div class="imagediv">
                        <img src="<?php echo "upload/".$row['Image'];?>" width="200" height="130"/>
                        </div>
                        <?php echo "<div class='product-id' style='display:none;'>{$row['Product_id']}</div>"; ?>
                        <div class="contentofimage">
                         <?php	 
                                echo "<h4>". $row['Name'] ."</h4>" ."<b>".$row['Description']."</b>" . "<br>". "<b>Category: </b>".$row['Category_Name'] ."<br>". "<b>Price: </b>$".$row['Price']; 				
								?>
                                 <div>      
  <input class="buybutton" type="button" value="Buy" name="submit">

      <?php  echo "<a href='#' class='submitButton contentofimage'>Add to cart</a>"; ?></div>
						</div>
                        </div>

</form>
                          <?php   }  
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                     
 					
    			</div>
			</div>
              
	</div>
	</div>
  </div>
 </div>   
  <div class="footer">
 <div class="footer-position">
 <img class="branding" src="" style="width: 30px; height: 30px;"><span class="copyright"> Copyright © 2000 - 2016 Mississippi</span>
 </div>    
</div>
</div>  
</body>
</html>