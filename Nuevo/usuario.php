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
	<script src="js/validacion.js"></script>
	<!-- Startup Images for iDevices -->
	<script>(function(){var a;if(navigator.platform==="iPad"){a=window.orientation!==90||window.orientation===-90?"images/startup-tablet-landscape.png":"images/startup-tablet-portrait.png"}else{a=window.devicePixelRatio===2?"images/startup-retina.png":"images/startup.png"}document.write('<link rel="apple-touch-startup-image" href="'+a+'"/>')})()</script>
	<!-- The script prevents links from opening in mobile safari. https://gist.github.com/1042026 -->
	<script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
</head> 
<body> 
	<div data-role="page">

		<div data-role="header">
			<h1>Groupy Cards</h1>
		</div>
		<div class="ui-grid-a">
	<div class="ui-block-a"><a href="add.php" data-role="button" data-theme="b"data-icon="plus">Add Card</a></div>
	<div class="ui-block-b"><a href="share.php" data-role="button" data-theme="b"data-icon="info">Share a Card</a></div>
</div>
		<div data-role="content">
			<form action="guardarUsuario.php">
				<ul data-role="listview" data-inset="true" data-theme="a" data-dividertheme="b">
					<li data-role="list-divider"></li>
					<li><input type="text" id="nombre" placeholder="Nombre"/>
					<div id="errorNombre" style="display:none; background:#FF3535">Falta ingresar el campo Nombre</div></li>
					<li><input type="text" id="nickname" placeholder="NickName"/>
					<div id="errorNickname" style="display:none; background:#FF3535">Falta ingresar el campo Cargo</div></li>
					<li><input type="text" id="cargo" placeholder="Cargo"/>
					<div id="errorCargo" style="display:none; background:#FF3535">Falta ingresar el campo Nickname</div></li>
					<li><input type="text" id="direccion" placeholder="Direccion"/>
					<div id="errorDireccion" style="display:none; background:#FF3535">Falta ingresar el campo Direccion</div></li>
					<li><input type="text" id="telefono" placeholder="Telefono"/>
					<div id="errorTelefono" style="display:none; background:#FF3535">Falta ingresar el campo Telefono</div>
					<div id="errorETelefono" style="display:none; background:#FF3535">El campo solo acepta valores numericos</div></li>
					<li><input type="text" id="email" placeholder="e-mail"/>
					<div id="errorEmail" style="display:none; background:#FF3535">Falta ingresar el campo e-mail</div>
					<div id="errorEEmail" style="display:none; background:#FF3535">Esto no es un correo</div></li>
					<li><input type="text" id="celular" placeholder="Celular"/>
					<div id="errorCelular" style="display:none; background:#FF3535">Falta ingresar el campo Celular</div>
					<div id="errorECelular" style="display:none; background:#FF3535">El campo solo acepta valores numericos</div></li>
					<li><input type="text" id="webpage" placeholder="Web Page"/>
					<div id="errorWebpage" style="display:none; background:#FF3535">Falta ingresar el campo Web Page</div>
					<div id="errorWebpage" style="display:none; background:#FF3535">Esta no es una pagina web</div></li>
					<li><input type="text" id="facebook" placeholder="Facebook"/>
					<div id="errorFacebook" style="display:none; background:#FF3535">Falta ingresar el campo Facebook</div></li>
					<li><input type="text" id="twitter" placeholder="Twitter"/>
					<div id="errorTwitter" style="display:none; background:#FF3535">Falta ingresar el campo Twitter</div></li>
					<li><input type="text" id="linkedin" placeholder="Linkedin"/>
					<div id="errorLinkedin" style="display:none; background:#FF3535">Falta ingresar el campo Linkedin</div></li>
					<li><input type="text" id="contrasena" placeholder="Contraseña"/>
					<div id="errorContrasena" style="display:none; background:#FF3535">Falta ingresar el campo Contrase&ntilde;a</div></li>
				</ul>
			</form>
			<button onClick="validarFormularioContacto(0);">Siguiente</button>
		</div>		
	</div>
</body>
</html>