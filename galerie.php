<?php
	$title="Galerie";
	$current = 'galerie';
	require 'debut_html.inc.php';
	require 'header_html.inc.php';
?>

<main id="galerie">
<h1>Galerie d'images</h1>
<p>Voici une sélection de pochettes d'albums post industriels pour vous imprégner de l'esthétique de ce genre musical. Vous pouvez utiliser l'outil ci-dessous pour insérer une nouvelle image !</p>
<form method="post" action="ajout_image.php" enctype="multipart/form-data">
<input type="file" name="nouvelleImage" />
<input type="password" name="mdp" placeholder="Mot de passe" />
<input type="submit" value="Ajouter" />
</form>
<?php
if (!empty($_SESSION['messageImage'])) {
echo '<p>'.$_SESSION['messageImage'].'</p>'."\n";
$_SESSION['messageImage']=null;
}
?>
<div id="mesImages">
    <div id="mesImages">
        <?php
            $contenu=dir("images/galerie/");
            while ($nomElement=$contenu->read()) {
                if (!is_dir('images/galerie/'.$nomElement)) {
                    $extension=substr(strtolower($nomElement), -4);
                    if (($extension=='.jpg') || ($extension=='.png')) {
                        echo '<img src="images/galerie/'.$nomElement.'" alt="'.$nomElement.'">'."\n";
                    }
                }
            }
            $contenu->close();
       ?>
    </div>
</main>

<?php
	require 'footer_html.inc.php';
	require 'fin_html.inc.php';
?>