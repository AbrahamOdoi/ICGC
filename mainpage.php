<!DOCTYPE html>

<html>
	<title>ICGC Devotional</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>
		<script type="text/javascript" src="script.js"></script>

		<link rel="stylesheet" href="css/style.css" />
		<!-- <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script> -->

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="jquery.nivo.slider.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<script>
			function updateIndicator() {
				document.getElementById('indicator').textContent = navigator.onLine ? '' : 'offline';
				alert			}
		</script>
	</head>
	<body onload="updateIndicator()" ononline="updateIndicator()" onoffline="updateIndicator()">
		<div id='page' data-role='page' >

			<div id='header' data-role='header' >
				<div class="div_header">
					ICGC Daily Devotional
					<!-- <p>
						<span id="indicator"></span>
					</p> -->
				</div>

				<div class="wrapper1">
					<a href="quotes.php" data-transition='flip'  class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/quote.png" />
					<br/>
					Quotes</a>
					<a href="daily.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/devotion.png" />
					<br/>
					Daily</a>
					<a href="pages/sermon.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/sermon.png" />
					<br/>
					Streaming</a>
					<a href="pages/books.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/books.png" />
					<br/>
					Books</a>
					<a href="pages/videos.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/videos.png" />
					<br/>
					Videos</a>
					<a href="pages/loc.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/loc.png" />
					<br/>
					Near You</a>
					<a href="pages/more.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/more.png" />
					<br/>
					More...</a>
				</div>

			</div>

			<div id='content' data-role='content'>

				<!-- IMAGE SLIDER -->
				<!-- <div class="slider-wrapper theme-defaults"> -->

				<div id="sliders" class="nivoSliders">
					<img src="img/slide/1.jpg" data-thumb="img/slide/otabil1.jpg"  alt="ICGC Slide" class="img_slide"/>
					<img src="img/slide/2.jpg" data-thumb="img/slide/otabil2.jpg" alt="ICGC Slide"  class="img_slide"/>
					<img src="img/slide/3.jpg" data-thumb="img/slide/otabil1.jpg"  alt="ICGC Slide"  class="img_slide"/>
					<img src="img/slide/4.jpg" data-thumb="img/slide/otabil4.jpg"  alt="ICGC Slide"  class="img_slide"/>
					<img src="img/slide/5.jpg" data-thumb="img/slide/otabil4.jpg"  alt="ICGC Slide"  class="img_slide"/>
				</div>
				<!-- </div> -->
				<!-- END OF IMAGE SLIDER -->

			</div>

			<div id='footer' data-role='footer'>
				<!-- <a href="#popupParis" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slide/otabil2.jpg" alt="Paris, France" style="width:10%"></a>
				<a href="#popupSydney" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slide/otabil1.jpg" alt="Sydney, Australia" style="width:10%"></a>
				<a href="#popupNYC" data-rel="popup" data-position-to="window" data-transition="fade"><img class="popphoto" src="img/slide/otabil4.jpg" alt="New York, USA" style="width:10%"></a>

				<div data-role="popup" id="popupParis" data-overlay-theme="a" data-theme="d" data-corners="false">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="img/slide/otabil2.jpg" style="max-height:912px;">
				</div>
				<div data-role="popup" id="popupSydney" data-overlay-theme="a" data-theme="d" data-corners="false">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="img/slide/otabil1.jpg" style="max-height:912px;">
				</div>
				<div data-role="popup" id="popupNYC" data-overlay-theme="a" data-theme="d" data-corners="false">
				<a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a><img class="popphoto" src="img/slide/otabil4.jpg" style="max-height:912px;">
				</div> -->
			</div>
		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {
		function updateIndicator() {
			document.getElementById('indicator').textContent = navigator.onLine ? 'online' : 'offline';
		}


		$('#slider').nivoSlider();
	}); 
</script>

