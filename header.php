<?php
session_start();

if (isset($_SESSION['login'])==false) { header("location:login.php"); }

?>

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
			<div class="row">
				<div class="col4"></div>
				<div class="col8">
					<div class="menu-toggle">
						<i class="fa fa-minus"></i>
						<i class="fa fa-minus"></i>
						<i class="fa fa-minus"></i>
					</div>
					<nav class="menu" id="primary-menu">
						<ul class="menu-nav">
							<li class="menu-nav-item"><a href="index.php">Strona główna</a></li>
							<li class="menu-nav-item"><a href="baza_wiedzy.php">Baza wiedzy</a></li>
							<li class="menu-nav-item"><a href="post_edit.php">Dodaj artykuł</a></li>				
							<li class="menu-nav-item"><a href=""></a></li>
							<li class="menu-nav-item"><a href="logout.php">Wyloguj</a></li>
						</ul>
				</div>
			</div>
		</div>
	</header>
