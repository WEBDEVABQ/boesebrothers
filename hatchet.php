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
	<title>Washington's Hatchet - Boese Brothers Brewery</title>
	<meta name="description" content="Boese Brothers Brewery's Washington's Hatchet is our darkest flagship brew, which prominently features a nearly forgotten ingredient called brown malt.">

	<link rel="stylesheet" href="stylesheets/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body class="porter">
<div class="content-container">
	<header class="site-header">
		<div class="wrap">
			<div class="logo"><a href="index" alt="Boese Brothers Brewery Logo"></a></div>

			<?php include 'nav.html';?>

		</div>
	</header>
	<div class="container">
		<div class="beer-info-wrap">
			<div class="beer-picture">
				<img src="images/beers/brownPorter.png" alt="Boese Brothers Washington's Hatchet">
			</div>
			<div class="beer-info">
				<h1>Washington's Hatchet</h1>
				<h3>Brown Porter</h3>
				<span class="abv">6%</span>

				<div class="tabs-wrap">
					<ul class="tabs">
						<li class="active" data-filter="description">Description</li>
						<li data-filter="history">History</li>
					</ul>
					<p class="description active">
						Washington's Hatchet is based on the traditional American Porters of the 1700’s, the distinctive color and flavor are developed by combining slowly kilned pale, amber, and brown malt. Mashing these grains renders delicious bready and burnt brownie notes, and a dash of Molasses contributes to the rich full flavor.  <br>
							<span class="beer-color copper">
							<strong>Color:</strong>
							Dark Chestnut Brown
							</span>
					</p>

					<p class="history">
						This style evolved from the Brown Ale and eventually led to the even darker Stout beers. Porter was the brewing industry’s contribution to the industrial revolution, utilizing new technologies and techniques to more quickly produce larger quantities of finished beer. History suggests that this beer was a favorite among London’s working class, hence the name Porter. When brought to Colonial America, brewers began incorporating Molasses to deepen the color, increase the alcohol content, and further enrich the flavor of these dark and delicious beers.
					</p>
				</div>
			</div>

			<?php include 'beer-menu.html'; ?>

		</div>
	</div><!--END OF CONTAINER -->
	<div class="footer-push"></div>
</div><!--END OF CONTENT CONTAINER -->

<?php include 'footer.html';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascripts/main.js"></script>
</body>
</html>
