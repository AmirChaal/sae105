    <footer>
		@ 2021 - IUT de Troyes -
		<?php
		$nb = trim(file_get_contents('comptage/mon_compteur.txt'));
		$nb++;
		echo $nb.' visiteur(s) sur notre site.'."\n";
		file_put_contents('comptage/mon_compteur.txt', $nb, LOCK_EX)
	    ?>
	</footer>