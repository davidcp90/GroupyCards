<!doctype html>
<html>
<head>
	<title>Groupy Cards</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">

	<!-- Home screen icon  Mathias Bynens mathiasbynens.be/notes/touch-icons -->
	<!-- For iPhone 4 with high-resolution Retina display: -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon.png">
	<!-- For first-generation iPad: -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon.png">
	<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
	<!-- For nokia devices and desktop browsers : -->
	<link rel="shortcut icon" href="favicon.ico" />
	
	<!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
	<meta http-equiv="cleartype" content="on">

	<!-- jQuery Mobile CSS bits -->
	<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />

	<!-- if you have a custom theme, add it here -->
	<link rel="stylesheet"  href="themes/cardshare.min.css" />

	<!-- Custom css -->
	<link rel="stylesheet" href="css/custom.css" />

	<!-- Javascript includes -->
	<script src="js/jquery-1.8.2-min.js"></script>
	<script src="js/mobileinit.js"></script>
	<script src="js/ios-orientationchange-fix.min.js"></script>
	<script src="js/jquery.mobile-1.2.0.min.js"></script>
	<script src="js/application.js"></script>
	<!-- Startup Images for iDevices -->
	<script>(function(){var a;if(navigator.platform==="iPad"){a=window.orientation!==90||window.orientation===-90?"images/startup-tablet-landscape.png":"images/startup-tablet-portrait.png"}else{a=window.devicePixelRatio===2?"images/startup-retina.png":"images/startup.png"}document.write('<link rel="apple-touch-startup-image" href="'+a+'"/>')})()</script>
	<!-- The script prevents links from opening in mobile safari. https://gist.github.com/1042026 -->
	<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
</head> 
<body> 
	<div data-role="page">

		<div data-role="header">
			<h1>Groupy Cards</h1>
			<a href="index.php" data-icon="back">Logout</a>
		</div>
		<img src="images/logo.png" alt="Groupy Cards"/>
		<div class="ui-grid-a">
	<div class="ui-block-a"><a href="add.php" data-transition="slidedown" data-role="button" data-theme="b"data-icon="plus">Add Card</a></div>
	<div class="ui-block-b"><a href="share.php" data-transition="slidedown" data-role="button" data-theme="b"data-icon="info">Share a Card</a></div>
</div>
		<div data-role="content">
		
			<ul data-role="listview" data-inset="true" data-theme="a" data-dividertheme="b">
				<li data-role="list-divider"></li>
				<li><a href="cards.php" data-transition="pop"><img src="images/cards.png" /><h2><strong>Contact Cards</strong></h2></a></li>
				<li><a href="groups.php" data-transition="pop"><img src="images/groups.png" /><h2><strong>Groups</strong></h2></a></li>
				<li><a href="profile.php" data-transition="pop"><img src="images/profile.png" /><h2><strong>My Profile</strong></h2></a></li>
				<li><a href="mycard.php" data-transition="pop"><img src="images/mycard.png" /><h2><strong>My Cards</strong></h2></a></li>
				<li><a href="about.php" data-transition="pop"><img src="images/about.png" /><h2><strong>About</strong></h2></a></li>
				
			</ul>

		</div>
		
		
		
	</div>
</body>
</html>