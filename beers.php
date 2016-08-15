<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
	<link rel="manifest" href="/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- END META -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ol' Shoney Scottish Ale - Boese Brothers Brewery</title>
	<meta name="description" content="The Ol' Shoney Scottish Ale is B3C’s most approachable and session-able offering. This beer utilizes high-quality roasted and kilned European malts, with just enough British hops to keep the flavors in balance.">

	<link rel="stylesheet" href="stylesheets/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

	<style type="text/css">
	body{
		overflow-y:scroll;
	}
	</style>
</head>
<body>
<div class="content-container">
	<header class="site-header">
		<div class="wrap">
			<ul class="social-media-links">
				<li><a href="https://www.facebook.com/boesebros"><span class="icon-facebook2"></span></a></li>
				<li><a href="https://instagram.com/boesebrothers/"><span class="icon-instagram"></span></a></li>
				<li><a href="https://twitter.com/boesebrothers"><span class="icon-twitter2"></span></a></li>
			</ul>
			<div class="logo"><a href="index.php" alt="Boese Brothers Brewery"></a></div>

			<?php include 'nav.html';?>


		</div>
	</header>
	<div class="container">
		<div class="beer-info-wrap">

			<div class="beer-picture">
				<img src="images/beers/scottishAle.png" alt="beer">
			</div>

			<div class="beer-info">
				<h1>Old Shonie</h1>
				<h3>Scottish Export Ale</h3>
				<span class="abv">4.5%</span>

				<div class="tabs-wrap">
					<ul class="tabs">
						<li class="active" data-filter="description">Description</li>
						<li data-filter="history">History</li>
					</ul>
					<p class="description active"> Old Shonie is the brewery’s most approachable and session-able offering. This beer utilizes high-quality roasted and kilned European malts, with just enough hops to keep the flavors in balance. It boasts a prominent but not overpowering malt flavor, with just a hint of grainy sweetness. The addition of a small quantity of caramelized oats gives the beer shaving cream-like foam and satisfying finish.
						<span class="beer-color copper">
						<strong>Color: </strong>Copper/Red
						</span>
					</p>

					<p class="history">
						Scotland’s climate is perfect for growing barley but not suitable for hop cultivation. In contrast, England is one of the world’s classic hop-growing regions. In the 1700’s, English hops bound for Scotland were subjected to heavy exportation taxation. In an effort to bypass hop taxation, Scottish brewers developed simple yet delicious malt-centric session beers known as Scottish Ales.
					</p>

				</div>

			</div>

			<?php include 'beer-menu.html'; ?>

		</div>
	</div><!--END OF CONTAINER-->
<div class="footer-push"></div>
</div><!--END OF CONTENT CONTAINER-->

<?php include 'footer.html'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascripts/main.js"></script>
</body>
</html>
