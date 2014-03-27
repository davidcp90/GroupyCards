
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
	<div data-role="dialog" data-theme="a">
	
		<div data-role="header" data-theme="a">
			<h1>New Group</h1>

		</div>

		<div data-role="content" data-theme="c">
			
			<p>Enter the name of the group</p>
				<div data-role="fieldcontain">
<label for="name">Name:</label>
<input type="text" name="name" id="name" value="" />
</div> 
<a href="groups.php" data-role="button" data-rel="check" data-theme="a">Ok</a>       
			<a href="groups.php" data-role="button" data-rel="back" data-theme="c">Cancel</a>     
		</div>
	</div>
</body>
</html>