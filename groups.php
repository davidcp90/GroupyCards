
<!doctype html>
<html>
<head>
	<title> Groupy Cards</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- jQuery Mobile CSS bits -->
	<link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />

	<!-- if you have a custom theme, add it here -->
	<link rel="stylesheet"  href="themes/cardshare.min.css" />

	<!-- Custom css -->
	<link rel="stylesheet" href="css/custom.css" />

	<!-- Javascript includes -->
	<script src="js/jquery-1.8.2-min.js"></script>
	<script src="js/mobileinit.js"></script>
	<script src="js/jquery.mobile-1.2.0.min.js"></script>
	<script src="js/application.js"></script>
</head>
<body>
	<div data-role="page">

		<div data-role="header">
			<a href="index.php" data-icon="home">Home</a>
			<h1>Groupy Cards</h1>
			<a href="newgroup.php"  data-rel="dialog" data-transition="flip" data-icon="plus">New Group</a>
		</div>

		<div data-role="content">
		<div id="headingzone"><img id="imgzone" src="images/groups2.png" alt="logocards"/><h2 id="titlezone">Groups</h2>
</div>
<div style="clear:both;"></div>
<p id="pzone">Click to view a specific contact card, search if you don't want to scroll.</p>

<ul data-role="listview" data-inset="true" data-theme="a">
<li data-icon="star" data-iconpos="right" ><a href="cardsgroup.php?idgroup=1">Firefox</a></li>
<li data-icon="star" data-iconpos="right"><a href="cardsgroup.php?idgroup=2">Campus</a></li>
<li  data-icon="star" data-iconpos="right"><a href="cardsgroup.php?idgroup=3">Sexy</a></li>
<li data-icon="star" data-iconpos="right"><a href="cardsgroup.php?idgroup=4">U</a></li>
</ul>




		</div>

		

	</div>
</body>
</html>