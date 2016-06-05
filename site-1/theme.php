<!doctype html>
<html prefix="og: http://ogp.me/ns#">
	<?php
		if (isset($_GET["productid"])) {

			include "api/database.php";
			$sql = "SELECT * FROM products_new WHERE id =" . $_GET["productid"];
			$result = $con -> query($sql);

			if ($result -> num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$productName = $row["productName"];
					$productDesc = $row["productDesc"];
					$productCategory = $row["productCategory"];
					$productPrice = $row["productPrice"];
				}
			}
	?>

	<head itemscope itemtype="http://schema.org/Product">

		<title><?php echo $productName; ?> &middot; Firangi.co &middot; Exclusive Designer Products on Firangi</title>
		<meta name="title" content="<?php echo $productName; ?> - Firangi.co - Exclusive Designer Products on Firangi">
		<meta property="og:title" itemprop="name" content="<?php echo $productName; ?>">
		
		<meta property="og:image" content="img/social.png">
		<link itemprop="image" href="img/social.png">

		<meta property="og:url" content="http://firangi.co">
		<meta property="og:type" content="product">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="agektmr">

		<meta property="og:description" itemprop="description" content="<?php echo $productDesc; ?>">
		<meta name="description" content="<?php echo $productDesc; ?>">

		<meta property="product:original_price:amount" content="<?php echo $productPrice; ?>">
		<meta property="product:original_price:currency" content="INR">
		<meta property="product:pretax_price:amount" content="<?php echo $productPrice; ?>">
		<meta property="product:pretax_price:currency" content="INR">
		<meta property="product:price:amount "content="<?php echo $productPrice; ?>">
		<meta property="product:price:currency "content="INR">
		<meta property="product:shipping_cost:amount "content="0">
		<meta property="product:shipping_cost:currency "content="INR">

	<?php
		} else {
	?>

	<head itemscope itemtype="http://schema.org/Thing">

		<title>Firangi.co</title>
		<meta property="og:title" itemprop="name" content="Firangi.co">
		
		<meta property="og:image" content="img/social.png">
		<link itemprop="image" href="img/social.png">

		<meta property="og:url" content="http://firangi.co">
		<meta property="og:type" content="website">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="agektmr">

		<meta property="og:description" itemprop="description" content="<?php echo $productDesc; ?>">
		<meta name="description" content="<?php echo $productDesc; ?>">

	<?php
		}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway:400">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Karla:400,400italic,700">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Playfair+Display:400italic">
		
		<meta name="theme-color" content="#e74c3c">
		<meta name="msapplication-navbutton-color" content="#e74c3c">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">

		<link rel="icon" sizes="192x192" href="icon.png">
		<link rel="apple-touch-icon" href="icon.png">

	</head>

	<body>

		<header id="masthead">
			<div class="menu" data-title="Menu">
				<i class="ion-navicon"></i>
			</div>
			<img src="img/logo.png" id="logo">
			<nav>
				<ul>
					<li><a href="#">Clothing</a></li>
					<li><a href="#">Phone Cases</a></li>
					<li><a href="#">Posters</a></li>
					<li><a href="#">Cards</a></li>
					<li class="offers"><a href="#">Blog</a></li>
					<li class="more-invisible"><a>More</a></li>
				</ul>
			</nav>
			<div class="bg-before"></div>
			<div class="navbar-over">
				<div class="title">Menu</div>
				<div class="cross close-btn"><i class="ion-close"></i></div>
				<ul>
					<div class="navbar-over-inside"></div>
					<li><a href="#">Track Order</a></li>
					<li><a href="#">Wishlist</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="#">Help &amp; FAQ</a></li>
					<div class="line"></div>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Press</a></li>
					<div class="line"></div>
					<li class="info-li">Call us<br><a href="#">+91 9555 297989</a></li>
					<li class="info-li">Email<br><a href="#">hello@firangi.co</a></li>
				</ul>
			</div>
			<div class="cart-over">
				<div class="title">Cart</div>
				<div class="cross close-btn"><i class="ion-close"></i></div>
				YOUR CART
				<a href="#">Add Discount Code</a>
				<div class="promo-code">
					<input type="text" placeholder="Enter Promo Code">
					<input class="btn" type="submit" value="Apply">
				</div>
				<a href="#" class="primary btn">Checkout</a>
				<a href="#" class="btn close-btn"><i class="ion-chevron-left left"></i>Continue Shopping</a>
			</div>
			<div class="nav-icons">
				<div class="icon search-invisible" data-title="Search">
					<i class="ion-android-search"></i>
				</div>
				<div class="search-container">
					<i class="ion-search"></i>
					<input type="search" class="search-input" placeholder="Search">
				</div>
				<div class="icon" data-title="Login">
					<i class="ion-happy-outline"></i>
				</div>
				<div class="icon cart-icon" data-title="Cart">
					<i class="ion-bag"></i>
					<div class="cart-number">3</div>
				</div>
			</div>
		</header>

		<!-- Stuff -->

		<script type="text/javascript" src="min/navbar.min.js"></script>

	</body>

</html>