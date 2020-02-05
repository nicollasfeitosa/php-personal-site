<!DOCTYPE html>
<html>
<head>
	<!--
		Nicollas Feitosa 1.0
		Personal Site Web Development
		https://github.com/nicollasfeitosa
	-->

	<!-- PHP Depedenciais -->
	<?php 
	
	require 'config.php';
	$curruntpage = 'Inicio';

	
	?>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<meta name="Resource-type" content="document">
	<link rel="canonical" href="<?php echo $url; ?>">
	<meta name="Robots" content="all">
	<meta name="Rating" content="general">
	<meta name="author" content="Nicollas Feitosa">
	<meta name="keywords" content="Nicollas Feitosa, Nicollas, Feitosa, Nicollas Feitosa Petrelli dos Santos, tecnologia, programador, streamer, youtuber, designer, twitch">
	<title> <?php echo $nome . " - " . $curruntpage; ?> </title>
	
	<!-- Favicon -->
	<link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">

	<!-- Theme Color -->
	<meta name="theme-color" content="#3C85DC">

	<!-- Icons -->
	<link rel="icon" type="image/png" href="assets/img/icon.png">

	<!-- Manifest -->
	<link rel="manifest" href="manifest.json">

	<!-- For Apple -->
	<!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
	<!-- <meta name="apple-mobile-web-app-status-bar-style" content="black"> -->
	<!-- <meta name="apple-mobile-web-app-title" content="Webstart"> -->
	<!-- <link rel="apple-touch-icon" type="image/png" href="assets/img/icon.png"> -->

	<!-- For Windows -->
	<!-- <meta name="msapplication-TileImage" content="assets/img/icon.png"> -->
	<!-- <meta name="msapplication-TileColor" content="#333333"> -->

	<!-- For Social Networks -->
	<meta property="og:locale" content="pt_BR">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Nicollas Feitosa">
	<!-- <meta property="og:image" content="assets/img/social.png"> -->
	<!-- <meta name="twitter:image" content="assets/img/social.png"> -->
	<!-- <meta property="fb:admins" content="SonicPlays"> -->

	<!-- CSS / Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- CSS / Bootstrap 4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- CSS / Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body ondragstart='return false'>
	<!-- Menu de Navegação Navbar -->

	<?php 
	// Importa Menu de Nav
	require 'nav.php';

	?>

	<!-- Fim do Navbar / Inicio do Header -->
	<header>
		<div class="container-propio">
			<div class="row animation heartBeat">
				<div class="col-md-4 emote">
					<img src="assets/img/love112.png" alt="Love Emote" class="love-emote">
				</div>
				<div class="col-md-8">
					<h1 class="text degrade">Oi eu sou o <b>"Nick" !</b></h1>
					<h3 class="text2 degrade">AKA: "Sonic" ou "SonicPlays"</h3>
				</div>
			</div>
		</div>
	</header>

	<!-- Conteúdo: Sobre -->
	<div class="title animated fadeInDown" id="sobre">
		<a class="sobre-titulo"><i class="fas fa-desktop"></i>  Um pouco sobre mim!</a>
	</div>
	<section class="dark-mode about">	
		<div class="container text-center animated fadeIn">
			<div class="row">
				<div class="col-md">
					<h4>Vamos lá!</h4>
					<p>Meu nome é Nicollas Feitosa, mas prefiro que me chamem de "Nick", também sou conhecido como "Sonic" ou "SonicPlays" no universo dos games! Meu mundo é a tecnologia e os games não há mais nada que eu goste mais do que isso!</p>
					<p>Desde pequeno eu já era um mero fascinado por tecnologia, aprendi tudo que sei até hoje praticamente sozinho, claro alguns dos cursos que fiz me ajudaram a lapidar meu conhecimento sobre determinados assuntos! Porém eu não paro por aqui, estou sempre em processo de aprendizagem em uma linguagem nova, cada conhecimento é uma conquista, adoro aprender sobre exatamente qualquer assunto de tecnologia seja hardware ou software, quando se trata desse assunto sou entusiasta em tudo!</p>
					<h5><i>Curiosidade: Tá vendo esse tema Dark Mode aqui? eu não vivo sem um desses!</i></h5>
				</div>
			</div>
		</div>
	</section>

	<!-- Conteúdo: Patrocinadores -->
	<div class="title animated fadeInDown" id="sobre">
		<a class="sobre-titulo"><i class="fas fa-code"></i>  Skills / Habilidades</a>
	</div>
	<section class="day-mode skills">
			<div class="container" id="skills">
				<div class="row">
					<div class="col-md">
						<p><i class="fab fa-html5"></i> HTML - Avançado</p>
						<p><i class="fab fa-css3-alt"></i> Cascading Style Sheets - Avançado </p>
						<p><i class="fab fa-js-square"></i> JavaScript - Avançado </p>
						<p><i class="fab fa-python"></i> Python - Avançado </p>
						<p><i class="fab fa-bootstrap"></i> Frameworks - Avançado </p>
						<p><i class="fab fa-adobe"></i> Produtos Adobe - Avançado </p>
						<p><i class="fas fa-vr-cardboard"></i> Game and 3D Engines - Intermediário </p>
						<p><i class="fas fa-rss"></i> LiveStream Services - Especialista </p>
					</div>
				</div>
			</div>
	</section>

	
	<!-- Conteúdo: Patrocinadores -->
	<div class="title animated fadeInDown" id="sobre">
		<a class="sobre-titulo"><i class="far fa-handshake"></i>  Patrocínadores</a>
	</div>
	<section class="dark-mode sponsors">
		<div class="container" id="sponsors">
			<div class="row">
				<div class="col-md">
					<img src="assets/img/twitch.png" alt="ugaming-logo" class="sponsorimg">
				</div>
				<div class="col-md">
					<img src="assets/img/ugaming.png" alt="ugaming-logo" class="sponsorimg">
				</div>
				<div class="col-md">
					<img src="assets/img/green.png" alt="ugaming-logo" class="sponsorimg">
				</div>
			</div>
		</div>
	</section>

	<!-- Conteúdo: Contato -->
	<div class="title animated fadeInDown" id="sobre">
		<a class="sobre-titulo"><i class="far fa-address-card"></i> Contato / Links</a>
	</div>
	<section class="day-mode links">
		<div class="container" id="contato">

			<div class="row">
				<div class="col-md">
					<p><i class="far fa-envelope"></i> Pessoal - <?php echo $email1; ?></p>
					<p><i class="far fa-envelope"></i> Empresarial - <?php echo $email2; ?></p>
					<p><i class="fas fa-at"></i><?php echo $social; ?> for Social Networks</p>
					<a href="https://discord.gg/sJYF5Jq" class="btn-custom"><i class="fab fa-discord"></i> Discord SonicPlaysTV</a><br>
					<a href="https://www.twitch.tv/SonicPlaysTV" class="btn-custom"><i class="fab fa-twitch"></i> Me assista na Twitch.TV</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Rodapé -->
	<?php 
	// Importa Rodapé
	require 'footer.php';
	
	?>


	<!-- JS / HTML5 Shiv 3.7.3 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" integrity="sha256-3Jy/GbSLrg0o9y5Z5n1uw0qxZECH7C6OQpVBgNFYa0g=" crossorigin="anonymous"></script>

	<!-- JS / Angular 1.7.8 -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.min.js"></script> -->

	<!-- JS / Jquery Slim 3.3.1 -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!-- JS / Popper 1.14.7 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

	<!-- JS / Bootstrap 4.3.1 -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- JS / VueJS -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->

	<!-- JS / Scripts -->
	<script src="assets/js/scripts.js"></script>
</body>
</html>
