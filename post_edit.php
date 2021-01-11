<?php

require_once("header.php");

?>

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col12">
					<header class="section-title">
						<h1>Dodaj nowy artykuł</h1>
					</header>
				</div>
			</div>
			<div class="row">
				<div class="col2">
				</div>
				<div class="col8">
					<div id="post-error">
					</div>
					<form role="edit article" class="">
							<p><input class="text-input" type="text" placeholder="Tytuł" id="title" name="title" maxlength="50"></p>
							<p><textarea class="text-input" placeholder="Odpowiedź dla pracownika" id="postw" name="postw" rows="10"></textarea></p>
							<p><textarea class="text-input" placeholder="Odpowiedź dla użytkownika" id="postu" name="postu" rows="10"></textarea></p>
							<p><input class="text-input" type="text" placeholder="Tagi" id="tags" name="tags" maxlength="50"></p>
							<p><select class="select" name="product" id="bw_product">
								<option value="1">Synergia</option>
								<option value="2">eSekretariat</option>
								<option value="3">eŚwiadectwa</option>
								<option value="4">eNauczanie</option>
								<option value="5">EduPage</option>
							</select>
							<select class="select" name="category" id="bw_category">
								<option value="1">Alerty</option>
								<option value="2">Anonimizacja</option>
								<option value="3">Centrum powiadomień</option>
								<option value="4">Dokumentacja</option>
								<option value="5">Dysk sieciowy</option>
							</select></p>
							<p><button class="btn btn-primary" type="submit" id="add_article">Dodaj artykuł</button></p>
					</form>
				</div>
			</div>
		</div>

	</section>

<?php

require_once("footer.php");

?>
