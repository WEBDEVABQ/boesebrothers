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
	<title>Contact Us - Boese Brothers Brewery</title>
	<meta name="description" content="Boese Brother's Brewery is located at 601 Gold Ave SW, Albuquerque, New Mexico 87102. Stop by and see us or call at (505) 382-7060">

	<link rel="stylesheet" href="stylesheets/styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body class="contact">
<div class="content-container">
	<header class="site-header">
		<div class="wrap">

		<ul class="social-media-links">
			<li><a href="https://www.facebook.com/boesebros"><span class="icon-facebook2"></span></a></li>
			<li><a href="https://instagram.com/boesebrothers/"><span class="icon-instagram"></span></a></li>
			<li><a href="https://twitter.com/boesebrothers"><span class="icon-twitter2"></span></a></li>
		</ul>

			<div class="logo"><a href="index" alt="Boese Brothers Brewery"></a></div>
			<?php include 'nav.html';?>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="address-info">
				<div class="feature-content">
					<h1>Contact Us</h1>
					<p class="address">
					<strong>
					601 Gold Ave SW <br>
					Albquerque, New Mexico 87102 <br>
					<i class="icon-phone"></i> (505) 382-7060
					</strong>
					<a class="btn btn-primary directions" href="https://www.google.com/maps/dir/Current+Location/601+Gold+Ave+Albuquerque+NM+13204" target="_blank">Get Directions</a>
					</p>
				</div>
				<div class="feature-content">
					<h2>Hours</h1>
					<p class="address">
					<strong>Monday</strong>
					3 p.m. - 10 p.m.<br>
					<strong>Tues - Thur</strong>
					3 p.m. - 12 a.m.<br>
					<strong>Friday</strong>
					3 p.m. - 2 a.m. <br>
					<strong>Saturday</strong>
					1 p.m - 2 a.m.<br>
					<strong>Sunday</strong>
					3 p.m. - 10 p.m.
					</p>
				</div>
			</div>
			<div class="map" id="map"></div>
		</div>
		<!--GOOGLE MAP CONTAINER -->
	</div><!--CONTACT INFO CONTAINER -->
	<div class="footer-push"></div>
</div><!--END OF CONTENT CONTAINER -->

<?php include 'footer.html'; ?>

<script>

var map;
function initMap() {

  var breweryLatLng= {lat: 35.0838703, lng: -106.65417480000002};
  map = new google.maps.Map(document.getElementById('map'), {
    center: breweryLatLng,
    zoom: 15
  });
  var marker = new google.maps.Marker({
    position: breweryLatLng,
    map: map,
    title: 'Boese Brothers Brewery'
  });

}

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_16TGGwTfmmrArVKy-LC5UJWEJDO3p9E&callback=initMap"
      ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="javascripts/main.js"></script>
</body>
</html>
