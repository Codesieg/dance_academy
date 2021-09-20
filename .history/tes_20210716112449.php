<?php

$listesFruits = ['banane', 'mangue', 'pomme'];
$nomDeListe = 'Fruits';



function listHTML($nomListe, $array) {
    if ($nomListe == null || $array == null) {
        return null;
    }
    echo "<h3>".$nomListe ."</h3><ul>";
    foreach($array as $elements) {
       echo "<li> . $elements .</li>";
    }
    echo '</ul>';
}

listHtml($nomDeListe, $listesFruits);