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
		<div id='quotes' data-role='page' >

			<div id='header' data-role='header' >
				<div class="div_header">
					QUOTES
				</div>
				<div class="wrapper1">
					<span class="span_menu"> <!-- <hr/> --> <img src="icons/quote.png" />
						<br/>
						Quotes</span>
					<span class="span_menu"> <!-- <hr/> --> <img src="icons/sermon.png" />
						<br/>
						Sermon</span>
					<span class="span_menu"> <!-- <hr/> --> <img src="icons/devotion.png" />
						<br/>
						Daily</span>
					<span class="span_menu"> <!-- <hr/> --> <img src="icons/books.png" />
						<br/>
						Books</span>
					<span class="span_menu" style="border-right: none;"> <!-- <hr/> --> <img src="icons/more.png" />
						<br/>
						More...</span>
				</div>

			</div>

			<div id='content' data-role='content'>

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
