<?php

require_once("header.php");

?>

	<section class="section">
		<span></span>
		<div class="container">
			<div class="row">
				<div class="col3">
					<h1>Produkt</h1>
					<select class="select" name="product" id="bw+product">
						<option value="synergia">Synergia</option>
						<option value="esekretariat">eSekretariat</option>
						<option value="eswiadectwa">eŚwiadectwa</option>
						<option value="enauczanie">eNauczanie</option>
						<option value="edupage">EduPage</option>
					</select>
					<h1>Kategoria</h1>
					<ul class="category-list text-left">
						<li class="category-list-item"><a href="">Alerty (2)</a></li>
						<li class="category-list-item"><a href="">Anonimizacja (1)</a></li>
						<li class="category-list-item"><a href="">Centrum powiadomień (1)</a></li>
						<li class="category-list-item"><a href="">Dokumentacja (1)</a></li>
						<li class="category-list-item"><a href="">Dysk sieciowy (5)</a></li>
						<li class="category-list-item"><a href="">Dziennik zajęć dodatkowych (7)</a></li>
						<li class="category-list-item"><a href="">e-Tablica (1)</a></li>
						<li class="category-list-item"><a href="">Edycja danych za ub. rok (1)</a></li>
						<li class="category-list-item"><a href="">Eksporty (14)</a></li>
						<li class="category-list-item"><a href="">Frekwencja (6)</a></li>
						<li class="category-list-item"><a href="">Hermes (1)</a></li>
						<li class="category-list-item"><a href="">Importy (2)</a></li>
						<li class="category-list-item"><a href="">Inne (10)</a></li>
						<li class="category-list-item"><a href="">Interfejs lekcyjny (4)</a></li>
						<li class="category-list-item"><a href="">Klasy (1)</a></li>
						<li class="category-list-item"><a href="">Konfiguracja (3)</a></li>
						<li class="category-list-item"><a href="">Konta (14)</a></li>
					</ul>
				</div>
				<div class="col9 text-right">
					<h1><input class="searchbar" type="text" placeholder="Wyszukaj.."></h1>
					<div class="container text-center">
						<div class="row">
							<div class="col12">
								<header class="section-title">
									<h5>Synergia > Alerty</h5>
								</header>
							</div>
						</div>
						<div class="row table table-header">
							<div class="col1 cell">
								ID
							</div>
							<div class="col9 cell">
								Tytuł
							</div>
							<div class="col1 cell">
								Wyśw.
							</div>
							<div class="col1 cell">
								Status
							</div>
						</div>

						<?php

						$mysqli = new mysqli('localhost', 'root', '', 'bw2');

						if ($mysqli->connect_error) {
						  die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
						}

						$query = "SELECT * FROM posts WHERE category='1'";
						$result = mysqli_query($mysqli, $query) or die(mysqli_error());

						while($row = mysqli_fetch_array($result)){
							switch ($row['verified']) {
								case 0:
									$stan = '<i style="color:red" class="fa fa-times-circle fa-tabela"></i>';
									break;
								case 1:
									$stan = '<i style="color:green" class="fa fa-check-circle fa-tabela"></i>';
									break;
							}
							echo '<div class="row table">
								<div class="col1 cell">'.$row['id'].'
								</div>
								<div class="col9 cell">'.$row['title'].'
								</div>
								<div class="col1 cell">'.$row['views'].'
								</div>
								<div class="col1 cell">'.$stan.'
								</div>
							</div>';
						}

						?>
					</div>
				</div>
		</div>

	</section>

<?php

require_once("footer.php");

?>
