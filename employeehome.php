

<!DOCTYPE html>
<html lang="en">
<head>
<title>#TheSneakerStore</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Wish shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<title><?php echo (isset($pageTitle)?$pageTitle:'PHP Shopping Cart')?></title>
<meta name="description" content="<?php echo (isset($metaDesc)?$metaDesc:'Demo PHP Shopping Cart')?>">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="welcome.php">#TheSneakerStore&nbsp;</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="employeehome.php">#Home</a></li>
					<li><a href="all_records.php">#Customers&nbsp;</a></li>
					<li><a href="orders.php">#order's</a></li>
					<li><a href="checkreviews.php">#Review's</a></li>
					
					<li><a href="products.php">#Products</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				
				<div class="shopping">
				
					
					<!-- Avatar -->
					<a href="welcomeeemployee.php">
						<div class="avatar">
							<img src="images/avatar.svg" alt="">
						</div>
					</a>
					
				</div>
			</div>

			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="logo menu_mm"><a href="#">#TheSneakerStore</a></div>
		<div class="search">
			<form action="#">
				<input type="search" class="search_input menu_mm" required="required">
				<button type="submit" id="search_button_menu" class="search_button menu_mm"><img class="menu_mm" src="images/magnifying-glass.svg" alt=""></button>
			</form>
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
					<li><a href="employeehome.php">#Home</a></li>
					<li><a href="all_records.php">#Customers&nbsp;</a></li>
					<li><a href="orders.php">#order's</a></li>
					<li><a href="checkreviews.php">#Review's</a></li>
					
					<li><a href="products.php">#Products</a></li>
				
				<li><a href="logout.php">#LOG OUT</a></li>
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item --> 
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_2.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Promo Prices</div>
							<div class="home_slider_title">New Collection</div>
						</div>	
					</div>
				</div>
				

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
	</div>


	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_image" style="background-image:url(images/gallery.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="gallery_title text-center">
						<ul>
							<li><a href="checkreviews.php">Click Here to See Reviews</a></li>
						
						</ul>
					</div>
					<div class="gallery_text text-center">  </div>
					
				</div>
			</div>
		</div>	
		<div class="gallery_slider_container">
			
			<!-- Gallery Slider -->
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/okok.jpg">
						<img src="images/okok.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/ok123.jpg">
						<img src="images/ok123.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/ok1234.jpg">
						<img src="images/ok1234.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/ok12345.jpg">
						<img src="images/ok12345.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/ppo.jpg">
						<img src="images/ppo.jpg" alt="">
					</a>
				</div>

				<!-- Gallery Item -->
				<div class="owl-item gallery_item">
					<a class="colorbox" href="images/ok123456.jpg">
						<img src="images/ok123456.jpg" alt="">
					</a>
				</div>

			</div>
		</div>	
	</div>

	


	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo"><a href="welcome.php">#SneakerStore</a></div>
					<nav class="footer_nav">
						<ul>
					<li><a href="employeehome.php">#Home</a></li>
					<li><a href="all_records.php">#Customers&nbsp;</a></li>
					<li><a href="orders.php">#order's</a></li>
					<li><a href="checkreviews.php">#Review's</a></li>
					
					<li><a href="products.php">#Products</a></li>
				
				<li><a href="logout.php">#LOG OUT</a></li>
							
							
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="social.html"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="social.html"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="social.html"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="social.html"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
							<li><a href="social.html"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>