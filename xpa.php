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

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- END META -->


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dr. Strangehop XPA - Boese Brothers Brewery</title>
	<meta name="description" content="The Boese Brothers Dr. Strangehop pushes the American Pale Ale in a tasty direction with abundant, yet clean, tropical hop flavors. ">

	<link rel="stylesheet" href="stylesheets/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

</head>
<body>
<div class="content-container">
	<header class="site-header">
		<div class="wrap">
			<div class="logo"><a href="index" alt="Boese Brothers Brewery"></a></div>
			<?php include 'nav.html';?>
		</div>
	</header>
	<div class="container">
	<div class="beer-info-wrap">
		<div class="beer-picture">
			<img src="images/beers/xpa.png" alt="Boese Brothers Dr. Strangehop XPA">
		</div>
		<div class="beer-info">
			<h1>Dr. Strangehop</h1>
			<h3>American Extra Pale Ale</h3>
			<span class="abv">6.5%</span>

			<div class="tabs-wrap">
				<ul class="tabs">
					<li class="active" data-filter="description">Description</li>
					<li data-filter="history">History</li>
				</ul>
				<p class="description active">
					The eXtra Pale Ale pairs a clean malt bill with big-time American hop flavors and aromas. We start adding hops the second wort hits the kettle and don’t let up until this beer is in the keg. A simple but delicious combination of classic and new era hops creates bright, tropical, and citrusy flavors. If you’re not yet a Pale Ale fan, stop worrying and learn to love the hops.
					<br>
					<span class="beer-color copper">
						<strong>Color: </strong>Cloudy Orange
					</span>
				</p>

				<p class="history">
					Most beer fans are already familiar with the origin of hoppy India Pale Ales. Craft brewed American interpretations are typically stronger and much more bitter than their British ancestors. Dr. Strangehop is B3C’s endeavor to push American Pale Ales in a new direction with pronounced, yet clean, fruity hop flavors.
				</p>
			</div>
		</div>
		<?php include 'beer-menu.html';?>
	</div>
	</div><!--END OF CONTAINER-->
	<div class="footer-push"></div>
</div><!--END OF CONTENT CONTAINER-->

<?php include 'footer.html';?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascripts/main.js"></script>
</body>
</html>
