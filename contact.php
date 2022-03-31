<?php
	$title="Contacts";
	$current = 'contacts';
	require 'debut_html.inc.php';
	require 'header_html.inc.php';
?>
<main>
<main class="contacts">
    <h1>Votre avis compte à nos yeux !</h1>
    <h2>Vos retours nous aident à améliorer notre site, donc n'hésitez surtout pas !</h2>
	<form method="POST" action="envoyer_mail.php">
		<div id="en-tete">
			<div>
				<label for="prenom">Prenom :</label>
				<input type="text" name="prenom" id="prenom" class="textarea"/>
			</div>
			<div>
				<label for="nom">Nom :</label>
				<input type="text" name="nom" id="nom" class="textarea"/>
			</div>
		</div>
		<label for="email">E-mail :</label>
		<input type="email" name="email" id="email" class="textarea"/>

		<label for="message">Message :</label>
		<textarea name="message" id="message" class="textarea"></textarea>

		<input type="submit" name="Envoyer" id="button"/>
	</form>
</main>
<?php
	require 'footer_html.inc.php';
	require 'fin_html.inc.php';
?>