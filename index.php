<html>
	<head>
		<title>Random</title>
		<link rel="shortcut icon" type="image/png" href="random1.png">
		<link rel="stylesheet" href="css/sweetalert.css" />
		<link rel="stylesheet" href="css/styleNES.css" />
		<link rel="stylesheet" href="css/NES.css" />
		<link rel="stylesheet" href="css/style.css" />
		
		<link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
		<script src="js/jq.js"></script>
		<script src="js/sweetalert.min.js"></script>
		<script src="js/baffle.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
		<script src="js/random-min.js"></script>
	</head>
	<body>
		<div class='' style='background-color:#FFF;' align='center'>
			<img src='LOGO.png'  width='500'>
		</div>
		<div class='contenedor' style='width:29%; display:inline-block; vertical-align:top; height:80%;'>
			<div>
				<span>Introduce tu lista</span><br>
				<textarea id='list' style='width:350px; height:80%;' onchange="checkMovies($(this).val())"></textarea>
			</div>
			<button type="button" style='font-family: "Press Start 2P"; margin-top:10px;' class="nes-btn is-success" onclick='makeRandom()'>Aleatorio!</button>
		</div>
		<div class='contenedor' style='width:69%;display:inline-block; vertical-align:top;'>
			<ol id='orden'></ol>
			<ol id='ordenHide' style='display:none;'></ol>
		</div>
	</body>
</html>