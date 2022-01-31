<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Vintage Sun Glasses</title>
		<link rel="icon" href="img/logo.png" type="image/png">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
			.video-background{
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%; 
			min-height: 100%;
			}
			
			footer{
			background-color: black;
			position: absolute;
			width:100%;
			z-index: 0;
			}
		</style>
	</head>
<body>
	<video autoplay loop class="video-background" muted plays-inline>
            <source src="vid/my.mp4" type="video/mp4">
    </video>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><img src="img/logo.png" class="logo" style="height:70px; width: 150px; margin: 10px;"></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3 col-xs-3">Sl.No</div>
									<div class="col-md-3 col-xs-3">Product Image</div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price in $.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								<!--<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in $.</div>
								</div>-->
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="cart.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
	<main>
        <div class="container-fluid p-0">
            <div class="site-content">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/2.jpg" style="width:93%; padding-left:7%; height:600px">
                              </div>
                              <div class="carousel-caption mr-10px pr-2px">
                                  <h1 class="h3-responsive" style="font-size: 40px; font-family:'Righteous';">Real Vision </h1>
                                  <h1 class="h3-responsive" style="font-size: 40px;">LUXURY <br>
                                  <span style="font-family: 'Pacifico'; font-size: 40px; 
                                  color: white !important;">Vintage Sunglasses</span></h1>
                                  <h5 style="font-size: 25px; font-family:'Righteous';">Discounts are Available now</h5>
                              </div>
                      </div>
                    </div>
                </div>
            </div>
		</main>
	<p><br/></p>
	
		
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; 2016</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<center>
					<ul class="pagination" id="pageno">
						<li><a href="#">1</a></li>
					</ul>
				</center>
			</div>
		</div>
	</div>
	
	<footer class="footer" style="margin-left:0; margin-right:0;">
                <div class="section-3 text-center">
                    <h3 style="margin-top:5%; color:white;">Get Best Luxury Sunglasses from</h3>
                    <h3 class="h3-responsive" style="font-family: 'Pacifico'; 
                      color: white !important;">Vintage Sunglasses</h3>
                    <h3 class="my-4" style="margin-top:5%; color:white;">If you need any help Contact Us</h3>
        
                    <div class="social" style="margin-top:0;">
                        <div class="row">
							<div class="col-md-2"></div>
                            <div class="col-md-2">
							<img class="fab fa-location-f m-2" src="img/icomoon_e646(2)_64.png"><h5 style="color:white;">17, Park Street,</h5><h5 style="color:white;">Colombo-5</h5>
                            </div>
							<div class="col-md-2">
							<img class="fab fa-telephone m-2" src="img/FontAwesome_f095(3)_64.png"><h5 style="color:white;">00944587906</h5>
                            </div>
							<div class="col-md-2">
							<img class="fab gmail m-2" src="img/Entypo_f310(5)_64.png"><h5 style="color:white;">luxvintsunglasses@gmail.com</h5>
                            </div>
							<div class="col-md-2">
							<img class="fab facebook m-2" src="img/FontAwesome_f09a(1)_64.png"><h5 style="color:white;">www.facebook.com/LuxVintSunglasses</h5>
                            </div>
							<div class="col-md-2"></div>
                        </div>
                    </div>
        
                    <hr>
                    <h4 class="h3-responsive" style="font-family: 'Pacifico'; 
                    color: white !important;">Vintage Sunglasses &copy;</h4>
                      
                </div>
            </footer>
	
</body>
</html>
















































