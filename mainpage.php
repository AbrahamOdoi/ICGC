<!DOCTYPE html>

<html>
	<title>ICGC Devotional</title>
	<head>

		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js"></script>

		<link rel="stylesheet" href="css/style.css" />
		<!-- <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
		<script src="js/jquery-1.8.2.min.js"></script>
		<script src="js/jquery.mobile-1.2.0.min.js"></script> -->

		<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

		<script type="text/javascript" src="jquery.mobile-1.0.1.min.js"></script>
		<script type="text/javascript" src="scripts/jquery-1.9.0.min.js"></script>
		<script type="text/javascript" src="jquery.nivo.slider.js"></script>

	</head>
	<body>
		<div id='page' data-role='page' >

			<div id='header' data-role='header' >
				<div class="div_header">
					ICGC Daily Devotional
				</div>

				<div class="wrapper1">
					<a href="pages/quotes.php" data-transition='flip' class="span_menu" style="color: black; border-left: 1px solid gray;"><img src="icons/quote.png" />
					<br/>
					Quotes</a>
					<a href="sermon.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/sermon.png" />
					<br/>
					Sermon</a>
					<a href="daily.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/devotion.png" />
					<br/>
					Daily</a>
					<a href="books.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/books.png" />
					<br/>
					Books</a>
					<a href="videos.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/more.png" />
					<br/>
					Videos</a>
					<a href="videos.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/more.png" />
					<br/>
					Near You</a>
					<a href="more.php" data-transition='slide' class="span_menu" style="color: black;"><img src="icons/more.png" />
					<br/>
					More...</a>
				</div>

			</div>

			<div id='content' data-role='content'>

				<!-- IMAGE SLIDER -->
				<div class="slider-wrapper theme-default">
					<div id="slider" class="nivoSlider">
						<img src="img/slide/otabil2.jpg" data-thumb="img/slide/otabil2.jpg" alt="" title=""/>
						<img src="img/slide/otabil1.jpg" data-thumb="img/slide/otabil1.jpg" alt="" title=""/>
						<img src="img/slide/otabil4.jpg" data-thumb="img/slide/otabil4.jpg" alt="" title=""/>
					</div>
				</div>
				<!-- END OF IMAGE SLIDER -->

			</div>

			<div id='footer' data-role='footer'>

			</div>
		</div>

	</body>
</html>
<script type="text/javascript" >
	$(document).ready(function() {

		$('#slider').nivoSlider();

	}); 
</script>
