<html>

<head>
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/aa28121cae.js" crossorigin="anonymous"></script>
	<!-- STYLE -->
	<link rel="stylesheet" href="css/grid.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Baza Wiedzy 2.0</title>


	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="bazawiedzy.js"></script>

</head>

<body>
	<header class="site-header">
		<div class="container">
			<div class="row">
				<div class="col4 logo">
					<h1 class="brand">
						<a href="index.php">
							<i class="fa fa-dungeon"></i>
							Baza Wiedzy 2
						</a>
					</h1>
				</div>
				<div class="col8">

				</div>
			</div>
		</div>
	</header>

	<section class="section">
		<div class="container ">
			<div class="row ">
				<div class="col4">
				</div>
				<div class="col4">
					<h5>Zaloguj się by uzyskać dostęp.</h5>
					<div id="login-error">
					</div>
					<form role="login" class="login-form">
							<p><input class="text-input" type="text" placeholder="Login" id="username" name="username" maxlength="50"></p>
							<p><input class="text-input" type="password" placeholder="Hasło" id="password" name="password" maxlength="50"></p>
							<p><button class="btn btn-primary" type="submit" id="login">Zaloguj</button></p>
					</form>
				</div>
			</div>
		</div>

	</section>



<?php

require_once("footer.php");

?>
