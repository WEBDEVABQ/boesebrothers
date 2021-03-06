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
	<title>Duke City Lager - Boese Brothers Brewery</title>
	<meta name="description" content="The Duke City Lager is all about maintaining balance between clean malt flavors and classic American hops, based on an American original called Steam Beer">

	<link rel="stylesheet" href="stylesheets/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body class="duke-city-lager">
<div class="content-container">
	<header class="site-header">
		<div class="wrap">
			<ul class="social-media-links">
				<li><a href="https://www.facebook.com/boesebros"><span class="icon-facebook2"></span></a></li>
				<li><a href="https://instagram.com/boesebrothers/"><span class="icon-instagram"></span></a></li>
				<li><a href="https://twitter.com/boesebrothers"><span class="icon-twitter2"></span></a></li>
			</ul>
			<div class="logo"><a href="index" alt="Boese Brothers Brewery Logo"></a></div>

			<?php include 'nav.html';?>

		</div>
	</header>
	<div class="container">
		<div class="beer-info-wrap">

			<div class="beer-picture">
				<img src="images/beers/dclager.png" alt="Boese Brothers Duke City Lager">
			</div>
			<div class="beer-info">
				<h1>Duke City Lager</h1>
				<h3>Steam-Style</h3>
				<span class="abv">5%</span>

				<div class="tabs-wrap">
					<ul class="tabs">
						<li class="active" data-filter="description">Description</li>
						<li data-filter="history">History</li>
					</ul>
					<p class="description active">
						Duke City Lager is an assertively hopped brew, based on an American original called the California Common Lager or Steam-Style Beer. Cool fermentation temperature and prolonged aging deliver a clean and refreshing beer, with a strong hop presence. This beer is loaded up with two American classics, Cascade and Willamette, resulting in a thirst quenching lager that delivers a combination of woody, fruity, and flowery hop flavors and aromas.
						<span class="beer-color copper">
						<strong>Color: </strong>Amber
						</span>
					</p>

					<p class="history">
						Steam Beer is a uniquely American creation developed in the western states during the late 1800s. The beer was a product of improvisation, as brewers attempted to create lager beers without the aid of refrigeration. These beers combine lager yeasts with slightly higher fermentation temperatures than those typically associated with traditional lager brewing. Additionally, these beers feature a more assertive hop and malt balance than just about any other style of lager.
					</p>

				</div>

			</div>
			<?php include 'beer-menu.html';?>
		</div>
	</div><!--END OF CONTAINER-->
<div class="footer-push"></div>
</div><!--END OF CONTENT CONTAINER-->

<?php include 'footer.html'; ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascripts/main.js"></script>
</body>
</html>
