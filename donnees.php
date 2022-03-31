<?php
    $title = "Données";
    $current = 'donnees';
require 'debut_html.inc.php';
require 'header_html.inc.php';
?>
<main id="donnees">
    
    <div id="matable_metawrapper">
    <h1>Classement des top 100 musiques appartenant, ou influencées par le mouvement post-industriel.</h1>
        <table border="1px" id="matable">
            <thead><th>Classement</th><th>Titre</th><th>Auteur(s)</th><th>Type de production</th><th>Année</th><th>Note moyenne sur 5</th></thead>
            <tbody>
            <?php
            $fichier = 'donnees/donnees.json';
            $tabFilmsJSON = file_get_contents($fichier);
            $tabFilmsPHP = json_decode($tabFilmsJSON);
            for ($i=0; $i<count($tabFilmsPHP); $i++) {
                echo '<tr>'."\n";
                echo '<td>'.$tabFilmsPHP[$i]->classement.'</td>'."\n";
                echo '<td>'.$tabFilmsPHP[$i]->titre.'</td>'."\n";
                echo '<td>'.$tabFilmsPHP[$i]->auteur.'</td>'."\n";
                echo '<td>'.$tabFilmsPHP[$i]->type.'</td>'."\n";
                echo '<td>'.$tabFilmsPHP[$i]->annee.'</td>'."\n";
                echo '<td>'.$tabFilmsPHP[$i]->note.'</td>'."\n";
                echo '</tr>'."\n";
                }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>$(document).ready( function () {$('#matable').DataTable();} );</script>
</main>
<?php
require 'footer_html.inc.php';
require 'fin_html.inc.php';
?>
