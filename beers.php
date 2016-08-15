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
				<img src="images/beers/whiteAle.png" alt="Boese Brothers La Onza Belgian White Ale">
			</div>

			<div class="beer-info">
				<h1>La Onza</h1>
				<h3>Belgian White Ale</h3>
				<span class="abv">5.4%</span>

				<div class="tabs-wrap">
					<ul class="tabs">
						<li class="active" data-filter="description">Description</li>
						<li data-filter="history">History</li>
					</ul>
					<p class="description active">
						A modern interpretation of a Belgian classic, this wheat and oat based beer is crisp, tart, and refreshing. Traditionally, white beers have been finished with dried coriander seeds and orange peels. In contrast, Boese Brothers utilizes fresh ginger, lemongrass, and El Dorado hops to deliver a subtle, dry, and refreshing beer with fruit and spice notes. The traditional Belgian yeast strain, in combination with relatively warm fermentation temperatures, delivers a bouquet of supporting fruity aromas and flavors, with a slightly tart finish.    <br>
						<span class="beer-color copper">
						<strong>Color: </strong>Hazy Off-White
						</span>
					</p>

					<p class="history">
						The Belgian Witbier (white beer) style is over 500 years old, but unfortunately disappeared in the 1950’s. A decade later, Pierre Celis rejuvenated this classic style, brewing in his hometown of Hoegaarden, Belgium. Since its revival, White Ale has increased in popularity throughout the world, and hopefully it will be around for another five centuries.
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
