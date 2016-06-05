<!doctype html>
<html>

	<head>

		<!-- Title -->
		<title>Firangiana</title>
		<meta property="og:title" itemprop="name" content="Firangiana">
		
		<!-- Image -->
		<meta property="og:image" content= "img/social.png">
		<link itemprop="image" href="img/social.png">

		<!-- Content -->
		<meta property="og:url" content= "http://firangi.co">
		<meta property="og:type" content="website">
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:site" content="agektmr">

		<!-- Description -->
		<meta property="og:description" itemprop="description" content="DESC">
		<meta name="description" content="DESC">

		<!-- Viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Karla:400,400italic,700">
		
		<!-- Theme -->
		<meta name="theme-color" content="#e74c3c">
		<meta name="msapplication-navbutton-color" content="#e74c3c">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="white-translucent">

		<!-- Icons -->
		<link rel="icon" sizes="192x192" href="icon.png">
		<link rel="apple-touch-icon" href="icon.png">


	</head>

	<body>

		<div class="logo">
			<img src="logo.png" alt="Firangana Partners">
		</div>
		<div class="login-form">
			<form method="post" action="check/register.php">
				<fieldset>
					<p>
						<label for="inviteCode">Invitation Code</label>
						<input type="text" name="inviteCode" id="inviteCode" placeholder="Enter your 10-digit invite code" required>
					</p>
					<p>
						<label for="name">What's your name?</label>
						<input type="text" name="name" id="name" placeholder="Enter your full name" required>
					</p>
					<p>
						<label for="email">Where can we email you?</label>
						<input type="email" name="email" id="email" placeholder="someone@example.com" required>
					</p>
					<p>
						<label for="phone">Where can we call you?</label>
						<input type="tel" name="phone" id="phone" placeholder="+91 987654321" required>
					</p>
					<p>
						<label for="address">Where do you live?</label>
						<textarea name="address" id="address" placeholder="Enter your home address with PIN Code. We'll send your payment cheques on this address." required></textarea>
					</p>
					<p>
						<label for="pan">What's your Permanent Account Number? (optional)</label>
						<input type="text" name="pan" id="pan" placeholder="Enter your 10-digit PAN card number">
					</p>
					<p>
						<label for="fb">Are you on Facebook? (optional)</label>
						<input type="text" name="fb" id="fb" placeholder="https://www.facebook.com/example">
					</p>
					<p>
						<label for="seller">What are you planning on selling?</label>
						<select id="seller" name="seller">
							<option selected disabled>Select an option</option>
							<optgroup label="For Graphic Designers">
								<option>Designs &mdash; phone cases, posters, etc.</option>
							</optgroup>
							<optgroup label="For Producers">
								<option>Everything &mdash; Clothing, cases, decor, and lifestyle</option>
								<option>Clothing &mdash; Apparel for men and women</option>
								<option>Phone Cases &mdash; Self-produced smartphone cases</option>
								<option>Home &amp; Decor &mdash; Furniture, lamps, etc.</option>
								<option>Lifestyle &mdash; Notebooks, selfie sticks, etc.</option>
								<option>Something else</option>
							</optgroup>
						</select>
					</p>
					<p>
						<input type="submit" value="Sign Up">
					</p>
				</fieldset>
			</form>
			<div><a href="index.php">Login</a>, if you have an account.</div>
		</div>

	</body>

</html>